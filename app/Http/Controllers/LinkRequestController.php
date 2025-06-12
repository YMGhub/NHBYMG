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


        <p>Thank you for starting the NHC Rental Application process.  </p>
        <div style='font-family: Arial, sans-serif; margin-bottom: 20px;'>
  <p><strong>As a reminder you need to have the following information and documents ready to complete the application:</strong></p>

  <ul>
    <li>Valid and accessible email address </li>
    <li>Valid Barbados Identification Card</li>
    <li>TAMIS Number of Applicant and Co-Applicant (if applicable) </li>
    <li>Salary Details per pay period of Applicant and Co-Applicant (if applicable) </li>
    <li>Recent Payslip (not more than 2 months old)</li>
    <li>Current level of indebtedness (Loans from financial institutions, hire purchase, other dept) </li>
    <li>Recent Job Letter (not more than one month old) </li>
    <li>Passport size photo </li>
  </ul>
</div>

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
            //return back()->with('error', 'The mail could not be sent. Please try again.');
              return back()->with('error', [
                        'message' => "Error",
                        'detail' => "The mail could not be sent. Please try again.",
                    ]);

        }

        }else{
            //Purchase
            $link = route('application-for-the-purchase.hash', ['hash' => $hash]);



            $htmlMessage = "
        <p>Hello!</p>

        <p>Thank you for starting the NHC Purchase Application process. </p>
        <div style='font-family: Arial, sans-serif; margin-bottom: 20px;'>
  <p><strong>As a reminder, you need to have the following information and documents ready to complete the application:</strong></p>

  <ul>
    <li>Valid and accessible email address</li>
    <li>Valid Barbados Identification Card</li>
    <li>TAMIS Number of Applicant and Co-Applicant (if applicable)</li>
    <li>Salary Details per pay period of Applicant and Co-Applicant (if applicable)</li>
    <li>Recent Payslip (not more than 2 months old). This must be uploaded</li>
    <li>If you are purchasing without a loan or mortgage, a <strong>BANK STATEMENT</strong> is required and must be uploaded to complete the application.</li>
    <li>For purchases financed by mortgages/loans, a <strong>MORTGAGE CERTIFICATE</strong> is required and must be uploaded to complete the application.</li>
    <li>If you want a housing solution on leased or rented land, you need a letter from the owner. This must be uploaded</li>
  </ul>
</div>

<p>Click the button below to open your purchases application form:</p>
        <p><a href='$link' style='padding: 10px 20px; background-color: #274abb; color: white; text-decoration: none; border-radius: 5px;'>Open Form</a></p>
    ";

            // Enviar email
            Mail::html($htmlMessage, function ($message) use ($request) {
                $message->to($request->email_field2)
                        ->subject('NHC Verification Link');
            });

             return back()->with('success', 'Your email has been sent successfully! Please check your inbox to continue the application process.');
        }






    }
}
