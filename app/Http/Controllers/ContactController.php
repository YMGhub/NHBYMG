<?php

namespace App\Http\Controllers;
use Validator;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function submitApplication(Request $request)
    {


        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'subject' => 'required|string|max:255',
            'comments' => 'required|string|max:255',
        ]);


        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'comments' => $request->comments,
        ]);


        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'comments' => $request->comments
        ];


        Mail::to('jonathan.motta@yellomg.com')->send(new ContactFormMail($details));




        // Redirect back with success message
        return redirect("/contact")->with('success', 'Message received successfully!');
    }
}
