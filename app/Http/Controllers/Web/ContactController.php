<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Contact\StoreContactRequest;
use App\Http\Requests\Contact\UpdateContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all(); // paginate();
        return view('contacts.index', ['contacts' => $contacts]);
    }

    public function create()
    {
        return view('contacts.create');
    }

    public function store(Request $request)
    {
        // TODO: implement method
        return redirect()->route('web.contacts.index');
    }

    public function show(int $id)
    {
        $contact = Contact::findOrFail($id);
        return view('contacts.show', ['contact' => $contact]);
    }

    public function edit(int $id)
    {
        // TODO: implement method
        return view('contacts.edit');
    }

    public function update(int $id, Request $request)
    {
        // TODO: implement method
        return redirect()->route('web.contacts.index');
    }

    public function destroy(int $id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return redirect()->route('web.contacts.index');
    }
}
