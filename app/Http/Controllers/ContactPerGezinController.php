<?php

namespace App\Http\Controllers;

use App\Models\ContactPerGezin;
use Illuminate\Http\Request;

class ContactPerGezinController extends Controller
{
    public function index()
    {
        $contactPerGezin = ContactPerGezin::with('gezin', 'contact')->get();
        return view('contactpergezin.index', compact('contactPerGezin'));
    }

    public function show($id)
    {
        $contactPerGezin = ContactPerGezin::with('gezin', 'contact')->findOrFail($id);
        return view('contactpergezin.show', compact('contactPerGezin'));
    }
}
