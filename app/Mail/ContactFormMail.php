<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $messageContent,$messageEmail,$messageSubject,$messageMessage;

    public function __construct($messageContent,$messageEmail,$messageSubject,$messageMessage)
    {
        $this->messageContent = $messageContent;
        $this->messageEmail = $messageEmail;
        $this->messageSubject = $messageSubject;
        $this->messageMessage = $messageMessage;

    }

    public function build()
    {
        return $this->view('emails.contact')
                    ->with(['nameMessage' => $this->messageContent,
                            'emailMessage' => $this->messageEmail,
                            'subjectMessage' => $this->messageSubject,
                            'meesageMessage' => $this->messageMessage]);
    }
}
