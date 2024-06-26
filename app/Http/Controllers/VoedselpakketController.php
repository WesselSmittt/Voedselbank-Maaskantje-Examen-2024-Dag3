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
        $gezinnen = Gezin::with('personen', 'voedselpakketten', 'eetwensen.eetwens')->get();
        $eetwensen = Eetwens::all();
        return view('voedselpakket.index', compact('gezinnen', 'eetwensen'));
    }

    public function filter(Request $request)
    {
        $eetwensId = $request->input('eetwens_id');
        if ($eetwensId) {
            $gezinnen = Gezin::whereHas('eetwensen', function ($query) use ($eetwensId) {
                $query->where('eetwens_id', $eetwensId);
            })->with('personen', 'voedselpakketten', 'eetwensen.eetwens')->get();
        } else {
            $gezinnen = Gezin::with('personen', 'voedselpakketten', 'eetwensen.eetwens')->get();
        }

        $eetwensen = Eetwens::all();
        return view('voedselpakket.index', compact('gezinnen', 'eetwensen'));
    }

    public function show($id)
    {
        $gezin = Gezin::with('personen', 'voedselpakketten')->findOrFail($id);
        return view('voedselpakket.show', compact('gezin'));
    }

    public function edit($id)
    {
        $voedselpakket = Voedselpakket::findOrFail($id);
        return view('voedselpakket.edit', compact('voedselpakket'));
    }

    public function update(Request $request, $id)
    {
        $voedselpakket = Voedselpakket::findOrFail($id);
        $gezin = $voedselpakket->gezin;

        if ($gezin->is_geregistreerd) {
            $voedselpakket->status = $request->input('status');
            $voedselpakket->datum_uitgifte = now();
            $voedselpakket->save();

            return redirect()->route('voedselpakket.show', $gezin->id)->with('success', 'De wijziging is doorgevoerd');
        } else {
            return redirect()->route('voedselpakket.edit', $id)->with('error', 'Dit gezin is niet meer ingeschreven bij de voedselbank en daarom kan er geen voedselpakket worden uitgereikt');
        }
    }
}
