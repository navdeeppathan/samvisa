<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;



class VisaRequestAdminMail extends Mailable
{
    public $visa;

    public function __construct($visa)
    {
        $this->visa = $visa;
    }

    public function build()
    {
        return $this->subject('New Visa Request Submitted')
                    ->view('emails.admin_visa_request');
    }
}
