<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function sendEmail(Request $request)
    {
        // Validate the input data (you can customize the validation rules)
        $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'email' => 'required|email',
            'telephone' => 'required|string',
            'message' => 'required|string',
        ]);

        // Data to be passed to the email view
        $data = [
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'email' => $request->input('email'),
            'telephone' => $request->input('telephone'),
            'message' => $request->input('message'),
        ];

        // Send email using the 'mail' blade template (you can customize the template)
        Mail::send('contact', $data, function ($message) use ($data) {
            $message->to('medi.mtfi@gmail.com') // Set the recipient email address
                ->subject('New Contact Form Submission'); // Set the email subject
        });

        // Optionally, you can check if the email was sent successfully
        if (Mail::failures()) {
            return response()->json(['message' => 'Failed to send email'], 500);
            return redirect()->route('accueil');
        }

        // Return a success response
        return response()->json(['message' => 'Email successfully sent!'], 200);
    }
}
