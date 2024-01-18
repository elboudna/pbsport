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
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
        ];

        Mail::to('recipient@example.com')->send(new ContactFormMail($data));

        // Optionally, you can check for successful email sending and provide feedback
        if (count(Mail::failures()) > 0) {
            return redirect('/contact')->with('error', 'Failed to send email.');
        }

        return redirect('/contact')->with('success', 'Email sent successfully!');
    }
}