<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Handle form submission, e.g., send email, store in database, etc.
        Mail::send('emails.contact', $validatedData, function ($message) use ($validatedData) {
            $message->to('contact@example.com')
                    ->subject('Contact Form Submission');
        });

        return redirect()->back()->with('success', 'Thank you for contacting us!');
    }
}