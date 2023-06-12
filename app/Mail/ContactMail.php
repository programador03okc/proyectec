<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
    public  $contact;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contact_data)
    {
        //
        $this->contact = json_decode($contact_data);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Anuncios de proyectec')->from('programador01@okcomputer.com.pe', 'Example')->view('mail.contact-mail');
    }
}
