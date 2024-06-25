<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ApplicationRentalMail extends Mailable
{
    use Queueable, SerializesModels;

    public $details;

    public function __construct($details)
    {
        $this->details = $details;
    }

    public function build()
    {



        $email = $this->subject('New Contact Application Rental Form')
        ->view('emails.applicationrental');




        if (!empty($this->details['photograph'])) {
            $email->attach(storage_path('app/public/' . $this->details['photograph']));
        }

        return $email;
    }
}
