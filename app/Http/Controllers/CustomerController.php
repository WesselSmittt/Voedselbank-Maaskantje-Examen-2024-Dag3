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

    // Query families with representative contacts matching the postcode
    $families = Gezin::whereHas('representative.contact', function ($query) use ($postcode) {
        $query->where('postcode', $postcode);
    })->with('representative.contact')->get();

    // Get unique postcodes for the dropdown
    $uniquePostcodes = Contact::distinct()->pluck('postcode');

    // Check if no families found
    if ($families->isEmpty()) {
        $message = "Er zijn geen klanten bekend die de geselecteerde postcode '{$postcode}' hebben.";
        return view('customers.index', compact('families', 'uniquePostcodes', 'message'));
    } else {
        return view('customers.index', compact('families', 'uniquePostcodes'));
    }
}

    public function show($id)
    {
        $family = Gezin::with('representative.contact')->findOrFail($id);
        return view('customers.show', compact('family'));
    }
}
