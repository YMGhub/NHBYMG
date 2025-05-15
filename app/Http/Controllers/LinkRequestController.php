<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\LinkRequest;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Exception;

class LinkRequestController extends Controller
{
    //

    public function send(Request $request)

    {

        $request->validate(['email_field2' => 'required|email']);

        $hash = Str::uuid()->toString(); // genera un hash único

        $linkRequest = LinkRequest::create([
            'email' => $request->email_field2,
            'hash' => $hash,
            'type_forms' => $request->type_form,
        ]);


        if($request->type_form == "rental"){

            $link = route('application-for-rental.hash', ['hash' => $hash]);



        $htmlMessage = "
    <p>Hello!</p>
    <p>Click the button below to open your rental application form:</p>
    <p><a href='$link' style='padding: 10px 20px; background-color: #274abb; color: white; text-decoration: none; border-radius: 5px;'>Open Form</a></p>
";

        // Enviar email
        /*Mail::html($htmlMessage, function ($message) use ($request) {
            $message->to($request->email_field2)
                    ->subject('Rental Form Link');
        });*/

        try {
            Mail::html($htmlMessage, function ($message) use ($request) {
                $message->to($request->email_field2)
                        ->subject('NHC Verification Link');
            });

            // Opcional: mensaje de éxito para debugging
            //Log::info('Mail successfully sent to: ' . $request->email_field2);

            return back()->with('success', 'Your email has been sent successfully! Please check your inbox to continue the application process.');

        } catch (Exception $e) {
            // Registrar el error
            //Log::error('Error sending the mail: ' . $e->getMessage());

            // Si deseas, puedes también devolver un error al usuario
            return back()->with('error', 'The mail could not be sent. Please try again.');
        }

        }else{
            //Purchase
            $link = route('application-for-the-purchase.hash', ['hash' => $hash]);



            $htmlMessage = "
        <p>Hello!</p>
        <p>Click the button below to open your purchases application form:</p>
        <p><a href='$link' style='padding: 10px 20px; background-color: #274abb; color: white; text-decoration: none; border-radius: 5px;'>Open Form</a></p>
    ";

            // Enviar email
            Mail::html($htmlMessage, function ($message) use ($request) {
                $message->to($request->email_field2)
                        ->subject('NHC Verification Link');
            });

             return back()->with('success', 'Email sent successfully');
        }






    }
}
