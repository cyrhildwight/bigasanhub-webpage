<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Franchise;

class AdminController extends Controller
{
    public function index()
    {
        $contacts = Contact::latest()->get();
        $franchises = Franchise::latest()->get();
        return view('admin.index', compact('contacts', 'franchises'));
    }
}
