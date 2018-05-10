<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name, $email, $body;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
       
        $this->name = $data['name'];
        $this->email = $data['email'];
        $this->body = $data['body'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.contact')->with('works', [$this->name, $this->email, $this->body]);
    }
}
