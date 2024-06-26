<?php

namespace App\Http\Controllers;
use App\Models\Leverancier; // Zorg ervoor dat je het Leverancier model importeert

use Illuminate\Http\Request;

class LeverancierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $leveranciertype = $request->input('leveranciertype');
    
        $leveranciers = Leverancier::query(); // Zorg ervoor dat je het model correct aanspreekt
    
        if (!empty($leveranciertype)) {
            $leveranciers->where('leveranciertype', $leveranciertype);
        }
    
        $leveranciers = $leveranciers->get();
    
        if ($leveranciers->isEmpty()) {
            return view('leverancier.leverancieroverzicht', ['leveranciers' => $leveranciers, 'message' => 'Er zijn geen leveranciers bekend van het geselecteerde leverancierstype.']);
        } else {
            return view('leverancier.leverancieroverzicht', ['leveranciers' => $leveranciers]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $leveranciers = Leverancier::with('contacten')->get();

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
