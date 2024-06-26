<?php

namespace App\Http\Controllers;

use App\Models\Gezin;
use App\Models\Eetwens;
use App\Models\Voedselpakket;
use Illuminate\Http\Request;

class VoedselpakketController extends Controller
{
    public function index()
    {
        $gezinnen = Gezin::with(['personen', 'voedselpakketten' => function ($query) {
            $query->whereIn('gezin_id', [1, 2]);
        }, 'eetwensen.eetwens'])->get();
        $eetwensen = Eetwens::all();
        return view('voedselpakket.index', compact('gezinnen', 'eetwensen'));
    }

    public function filter(Request $request)
    {
        $eetwensId = $request->input('eetwens_id');
        if ($eetwensId) {
            $gezinnen = Gezin::whereHas('eetwensen', function ($query) use ($eetwensId) {
                $query->where('eetwens_id', $eetwensId);
            })->with(['personen', 'voedselpakketten' => function ($query) {
                $query->whereIn('gezin_id', [1, 2]);
            }, 'eetwensen.eetwens'])->get();
        } else {
            $gezinnen = Gezin::with(['personen', 'voedselpakketten' => function ($query) {
                $query->whereIn('gezin_id', [1, 2]);
            }, 'eetwensen.eetwens'])->get();
        }

        $eetwensen = Eetwens::all();
        return view('voedselpakket.index', compact('gezinnen', 'eetwensen'));
    }

    public function show($id)
    {
        $gezin = Gezin::with(['personen', 'voedselpakketten' => function ($query) use ($id) {
            $query->where('gezin_id', $id);
        }])->findOrFail($id);

        return view('voedselpakket.show', compact('gezin'));
    }
    public function edit($id)
    {
        $voedselpakket = Voedselpakket::findOrFail($id);
        $gezin = $voedselpakket->gezin;

        $isDisabled = $gezin->voedselpakketten->contains('status', 'NietMeerGegeven');

        return view('voedselpakket.edit', compact('voedselpakket', 'isDisabled'));
    }

    public function update(Request $request, $id)
    {
        $voedselpakket = Voedselpakket::findOrFail($id);
        $gezin = $voedselpakket->gezin;

        if ($gezin->voedselpakketten->contains('status', 'NietMeerGegeven')) {
            return redirect()->route('voedselpakket.edit', $voedselpakket->id)->with('error', 'Dit gezin is niet meer ingeschreven bij de voedselbank en daarom kan er geen voedselpakket worden uitgereikt');
        }

        $status = $request->input('status');
        $voedselpakket->status = $status;
        $voedselpakket->datum_uitgifte = $status === 'Uitgereikt' ? now() : null;
        $voedselpakket->save();

        return redirect()->route('voedselpakket.edit', $voedselpakket->id)->with('success', 'De wijziging is doorgevoerd');
    }
}
