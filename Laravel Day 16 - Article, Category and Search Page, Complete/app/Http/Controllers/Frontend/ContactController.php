<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('frontend.contact');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|email',
            'phone' => 'nullable|max:20',
            'subject' => 'required|max:255',
            'message' => 'required',
        ]);

        Contact::create($request->all());

        return back()->with('success', 'Your message has been sent successfully.');
    }
}
