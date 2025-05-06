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
    public $documentsSend;

    public function __construct($details,$documentsSend = [])
    {
        $this->details = $details;
        $this->documentsSend = $documentsSend;
    }

    public function build()
    {



        $email = $this->subject('New Contact Application Rental Form')
            ->view('emails.applicationrental');


            foreach ($this->documentsSend as $index => $doc) {
                if (!empty($doc['base64'])) {
                    $decoded = base64_decode($doc['base64']);

                    // Detect MIME
                    $finfo = finfo_open();
                    $mime = finfo_buffer($finfo, $decoded, FILEINFO_MIME_TYPE);
                    finfo_close($finfo);

                    // Guess extension based on MIME
                    $extensions = [
                        'application/pdf' => 'pdf',
                        'image/jpeg' => 'jpg',
                        'image/jpg' => 'jpg',
                        'image/png' => 'png',
                        'application/msword' => 'doc',
                        'application/vnd.openxmlformats-officedocument.wordprocessingml.document' => 'docx',
                        // puedes agregar más tipos si lo necesitas
                    ];
                    $extension = $extensions[$mime] ?? 'bin';

                    $filename = 'document_' . ($index + 1) . '.' . $extension;

                    $email->attachData($decoded, $filename, ['mime' => $mime]);
                }
            }



        return $email;
    }
}
