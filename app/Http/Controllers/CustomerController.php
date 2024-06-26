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
        $families = Gezin::whereHas('representative.contact', function ($query) use ($postcode) {
            $query->where('postcode', $postcode);
        })->with('representative.contact')->get();
        $uniquePostcodes = Contact::distinct()->pluck('postcode');
        return view('customers.index', compact('families', 'uniquePostcodes'));
    }

    public function updateRepresentative(Request $request, Gezin $family)
    {
        // Valideer de invoer indien nodig
        $request->validate([
            'voornaam' => 'required',
            'achternaam' => 'required',
            'email' => 'required|email',
            'mobiel' => 'required',
            'straat' => 'required',
            'huisnummer' => 'required',
            'postcode' => 'required|regex:/^5271/',
            'woonplaats' => 'required',
        ], [
            'postcode.regex' => 'Deze postcode komt niet uit de regio Maaskantje.'
        ]);

        // Update de gegevens van de vertegenwoordiger
        $representative = $family->representative;
        $representative->voornaam = $request->input('voornaam');
        $representative->tussenvoegsel = $request->input('tussenvoegsel');
        $representative->achternaam = $request->input('achternaam');
        
        // Update contactgegevens van de vertegenwoordiger
        $representative->contact->email = $request->input('email');
        $representative->contact->mobiel = $request->input('mobiel');
        $representative->contact->straat = $request->input('straat');
        $representative->contact->huisnummer = $request->input('huisnummer');
        $representative->contact->toevoeging = $request->input('toevoeging');
        $representative->contact->postcode = $request->input('postcode');
        $representative->contact->woonplaats = $request->input('woonplaats');
        
        // Opslaan van de updates
        $representative->contact->save();
        $representative->save();

        return redirect()->route('customers.index', $family->id)->with('success', 'De klantgegevens zijn gewijzigd.');
    }

    public function show($id)
    {
        $family = Gezin::with('representative.contact')->findOrFail($id);
        return view('customers.show', compact('family'));
    }
}
