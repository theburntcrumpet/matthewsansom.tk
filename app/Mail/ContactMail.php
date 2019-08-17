<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $email; 

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public function __construct(Request $request)
    {
        $this->email = $request; 
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from("matthewsansom@hotmail.co.uk")
                    ->to("matthewsansom@hotmail.co.uk")
                    ->subject("New Website Enquiry: ".$this->email->subject)
                    ->view('emails.contact');
    }
}
