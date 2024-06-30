<?php

namespace App\Http\Controllers;
use App\Models\Leverancier; 
use App\Models\Contact; 

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index()
    {
        $contacts = DB::table('contact')
            ->join('contactperleverancier', 'contact.id', '=', 'contactperleverancier.contact_id')
            ->join('leverancier', 'leverancier.id', '=', 'contactperleverancier.leverancier_id')
            ->whereIn('leverancier.id', [1, 2, 3, 4, 5, 6, 7, 8])
            ->select('contact.*')
            ->get();

        // Return the view with contacts data
        return view('contacts.index', ['contacts' => $contacts]);
    }
}
