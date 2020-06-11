<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormPublic extends Mailable
{
    use Queueable, SerializesModels;
    // declaring our variables to be send
    public $email;
    public $name;
    public $subject;
    public $message;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    // construct variables in expectation of $request which we passed
    // from our PageController
    public function __construct($request)
    {
        // construction of our variables to be send
        $this->email = $request->email;
        $this->name = $request->name;
        $this->subject = $request->subject;
        $this->message = $request->message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //
        return $this->from($this->email, $this->name)
            //->cc()
            //->bcc()
            ->subject($this->subject)
            // you can use ->attach('attachment') to add attachments
            ->markdown('email.contact');
    }


}
