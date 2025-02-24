<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    // Show the contact form
    public function showForm()
    {
        return view('contact');
    }

    // Handle the contact form submission
    public function submit(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Save the contact message in the database
        $contactMessage = new ContactMessage();
        $contactMessage->name = $validated['name'];
        $contactMessage->email = $validated['email'];
        $contactMessage->message = $validated['message'];
        $contactMessage->save();

        // // Send an email (optional, you can customize this)
        // Mail::to('your-email@example.com')->send(new \App\Mail\ContactFormMail($contactMessage));

        // Redirect to a thank you page or back to form with success message
        return redirect()->route('contact')->with('success', 'Your message has been sent!');
    }
}
