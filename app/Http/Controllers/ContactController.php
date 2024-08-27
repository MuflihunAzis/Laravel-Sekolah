<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\ProfileMadrasah;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::orderByRaw('created_at DESC')->paginate(1);
        $profile_madrasah = ProfileMadrasah::first();
        return view('contact.index', compact('contact', 'profile_madrasah'));
    }

    public function create()
    {
        return view('contact.create');
    }

    public function store(Request $request)
    {
        $contact = new Contact();
        $contact->alamat   = $request->input('alamat');
        $contact->email   = $request->input('email');
        $contact->telpon   = $request->input('telpon');
        $contact->instagram   = $request->input('instagram');
        $contact->facebook   = $request->input('facebook');
        $contact->twitter   = $request->input('twitter');
        $contact->save();
        return redirect()->route('contact.index')->with("success", "Data berhasil disimpan");
    }

    public function edit($id)
    {
        $contact = Contact::find($id);
        $profile_madrasah = ProfileMadrasah::first();
        return view('contact.edit', compact('contact','profile_madrasah' ));
    }

    public function update(Request $request, $id)
    {
        $contact = Contact::findorfail($id);
        $contact->update($request->all());
        return redirect()->route('contact.index')->with('success', 'Edit data sukses');
    }
}
