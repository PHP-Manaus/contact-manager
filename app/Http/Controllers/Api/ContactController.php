<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Contact\StoreContactRequest;
use App\Http\Requests\Contact\UpdateContactRequest;
use App\Http\Resources\ContactResource;
use App\Models\Contact;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::paginate();
        return ContactResource::collection($contacts);
    }

    public function store(StoreContactRequest $request)
    {
        // $contact = new Contact();
        // $contact->name = $request->name;
        // $contact->email = $request->email;
        // $contact->phone = $request->phone;
        // $contact->city = $request->city;
        // $contact->state = $request->state;
        // $contact->save();
        $contact = Contact::create($request->validated());
        return ContactResource::make($contact);
    }

    public function show(int $id)
    {
        // 1
        $contact = Contact::whereId($id)->first();
        // $contact = Contact::where('id', $id)->first();
        // $contact = Contact::where('id', '=', $id)->first();
        // $contact = Contact::where('id', 'LIKE', '%' . $id . '%')->first();
        // $contact = Contact::findOrFail($id);
        return ContactResource::make($contact);
    }

    public function update(UpdateContactRequest $request, int $id)
    {
        $contact = Contact::whereId($id)->first();
        $contact->update($request->validated());
        // $contact = Contact::findOrFail($id);
        // $contact->name = $request->name;
        // $contact->email = $request->email;
        // $contact->phone = $request->phone;
        // $contact->city = $request->city;
        // $contact->state = $request->state;
        // $contact->save();
        return ContactResource::make($contact);
    }

    public function destroy(int $id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return response()->noContent();
    }
}
