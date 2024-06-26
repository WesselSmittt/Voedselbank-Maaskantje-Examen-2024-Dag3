<?php

namespace App\Http\Controllers;

use App\Models\Gezin;
use App\Models\Eetwens;
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
}
