<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    // Show the form to create a new contact
    public function create()
    {
        return view('contacts.create');
    }

    // Store a newly created contact in storage
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|regex:/^[a-zA-Z]+$/u',
            'phone' => 'required|numeric|digits:10',
            'email' => 'required|email',
        ]);

        // Create a new contact record using mass assignment
        Contact::create($request->all());

        // Redirect back to the index page with a success message
        return redirect()->route('contacts.index')->with('success', 'Contact created successfully!');
    }

    // Display a listing of the contacts
    public function index()
    {
        // Retrieve all contacts from the database
        $contacts = Contact::all();

        // Return the view with the retrieved contacts data
        return view('contacts.index', compact('contacts'));
    }

    // Display the specified contact
    public function show($id)
    {
        // Find the contact by its ID
        $contact = Contact::findOrFail($id);

        // Return the view with the found contact data
        return view('contacts.show', compact('contact'));
    }

    // Show the form for editing the specified contact
    public function edit($id)
    {
        // Find the contact by its ID
        $contact = Contact::findOrFail($id);

        // Return the view with the found contact data
        return view('contacts.edit', compact('contact'));
    }

    // Update the specified contact in storage
    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'sometimes|required|string|regex:/^[a-zA-Z]+$/u',
            'phone' => 'sometimes|required|numeric|digits:10',
            'email' => 'sometimes|required|email',
        ]);

        // Find the contact by its ID and update its attributes
        $contact = Contact::findOrFail($id);
        $contact->update($request->all());

        // Redirect back to the index page with a success message
        return redirect()->route('contacts.index')->with('success', 'Contact updated successfully!');
    }

    // Remove the specified contact from storage
    public function destroy($id)
    {
        // Find the contact by its ID and delete it
        Contact::findOrFail($id)->delete();

        // Redirect back to the index page with a success message
        return redirect()->route('contacts.index')->with('success', 'Contact deleted successfully!');
    }
}
