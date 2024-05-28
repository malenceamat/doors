<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::firstOrCreate();
        $check_role = Auth::user();

        return view('admin.content.contacts.contacts', compact('contact','check_role'));
    }
    public function create(ContactRequest $req)
    {
        Contact::first()->update($req->all());

        return back();
    }
}
