<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Request $request)
{
    $query = Contact::query();

    if ($request->has('search')) {
        $search = $request->search;
        $query->where('name', 'LIKE', "%$search%")
              ->orWhere('email', 'LIKE', "%$search%");
    }

    if ($request->has('sort') && in_array($request->sort, ['name', 'created_at'])) {
        $order = $request->order === 'desc' ? 'desc' : 'asc'; 
        $query->orderBy($request->sort, $order);
    }

    $contacts = $query->paginate(10); 

    return view('contacts.index', compact('contacts'));
}


   
    public function create()
    {
        return view('contacts.create');
    }

 
    public function store(Request $request)
    {
        $validated      = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:contacts',
            'phone' => 'nullable',
            'address' => 'nullable',
        ]);

        Contact::create($validated);
        return redirect()->route('contacts.index')->with('success', 'Contact Created Success!');
    }

  
    public function show(Contact $contact)
    {
        return view('contacts.show', compact('contact'));
    }

 
    public function edit(Contact $contact)
    {
        return view('contacts.edit', compact('contact'));
    }

   
    public function update(Request $request, Contact $contact)
    {
        $validated      = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'nullable',
            'address' => 'nullable',
        ]);

        $contact->update($validated);
        return redirect()->route('contacts.index')->with('success', 'Contact Updated Success!');
    }

 
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contacts.index')->with('success', 'Contact Delete Successfully!');
    }
}
