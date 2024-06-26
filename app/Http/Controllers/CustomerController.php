<?php

namespace App\Http\Controllers;

use App\Models\Gezin;
use App\Models\Contact;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $families = Gezin::with('representative.contact')->get();
        $uniquePostcodes = Contact::distinct()->pluck('postcode');
        return view('customers.index', compact('families', 'uniquePostcodes'));
    }

    public function searchByPostcode(Request $request)
{
    $postcode = $request->input('postcode');
    
    // Example query to retrieve families based on postcode match
    $families = Gezin::whereHas('representative.contact', function ($query) use ($postcode) {
        $query->where('postcode', $postcode);
    })->with('representative.contact')->get();
    
    // Example to retrieve unique postcodes for dropdown
    $uniquePostcodes = Contact::distinct()->pluck('postcode');

    if ($families->isEmpty()) {
        $message = "Er zijn geen klanten bekend die de geselecteerde postcode '{$postcode}' hebben.";
        return view('customers.index', compact('families', 'uniquePostcodes', 'message'));
    } else {
        return view('customers.index', compact('families', 'uniquePostcodes'));
    }
}

public function updateRepresentative(Request $request, Gezin $family)
{
    // Valideer de invoer als nodig
    $request->validate([
        'voornaam' => 'required',
        'achternaam' => 'required',
        'email' => 'required|email',
        'mobiel' => 'required',
        'straat' => 'required',
        'huisnummer' => 'required',
        'postcode' => 'required',
        'woonplaats' => 'required',
    ]);

    // Update de vertegenwoordiger gegevens
    $representative = $family->representative;
    $representative->voornaam = $request->input('voornaam');
    $representative->tussenvoegsel = $request->input('tussenvoegsel');
    $representative->achternaam = $request->input('achternaam');
    $representative->contact->email = $request->input('email');
    $representative->contact->mobiel = $request->input('mobiel');
    $representative->contact->straat = $request->input('straat');
    $representative->contact->huisnummer = $request->input('huisnummer');
    $representative->contact->toevoeging = $request->input('toevoeging');
    $representative->contact->postcode = $request->input('postcode');
    $representative->contact->woonplaats = $request->input('woonplaats');
    $representative->contact->save();
    $representative->save();

    return redirect()->route('customers.show', $family->id)->with('success', 'Vertegenwoordiger gegevens zijn succesvol bijgewerkt.');
}



    public function show($id)
    {
        $family = Gezin::with('representative.contact')->findOrFail($id);
        return view('customers.index', compact('family'));
    }
}
