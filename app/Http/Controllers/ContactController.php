<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function index()
    {
        $contacts = Contact::all();

        return view('contact', compact('contacts'));
    }

    public function store()
    {
        $contact = new Contact();

        $contact->name = 'Ricardo Valus';
        $contact->email = 'ricardo@email.com';
        $contact->telefone = '(42) 99999-99999';
        $contact->data_nascimento = '1997-10-18';
        $contact->save();
    }

    public function update()
    {
        $contact = Contact::find('3');
        $contact->name = "Ric Val";
        $contact->save();

        $contact = Contact::where('name', 'Hiego Souza')->first();
        $contact->name = "Mariana";
        $contact->save();
    }

    public function destroy($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
    }
}
