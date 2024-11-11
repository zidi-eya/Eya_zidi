<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact'); // Make sure you have a view named contact.blade.php
    }

    public function submit(Request $request)
    {
        // Validate request data
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Handle form submission, like sending an email or saving to the database

        return redirect('/contact')->with('success', 'Your message has been sent!');
    }
}
