<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $uniqueId;

    public function __construct($data, $uniqueId)
    {
        $this->data = $data;
        $this->uniqueId = $uniqueId;
    }

    public function build()
    {
        // Create a unique subject and Message-ID
        $uniqueSubject = 'Nouvelle Réservation - ' . $this->uniqueId;

        return $this->subject($uniqueSubject)
                    ->view('mails.contact_mail')
                    ->withSwiftMessage(function ($message) {
                        $message->getHeaders()
                                ->addTextHeader('Message-ID', $this->uniqueId . '@mrctrips.com');
                    });
    }
}