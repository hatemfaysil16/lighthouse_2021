<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactUsMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $email;
    public $message;

    public function __construct($email, $message)
    {
        $this->email = $email;
        $this->message = $message;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $name = 'lighthouse';
        $subject ='New Contact message from your website';


    return $this->subject($subject)->from($this->email, $name)->markdown('Email.ContactUsMail',['details' => $this->message,'name'=> $name]);
    }
}




