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
    public $first_name;
    public $last_name;
    public $subject;
    public $body;
    public function __construct($subject, $body, $first_name, $last_name)
    {
        //
        $this->subject = $subject;
        $this->body = $body;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    private function name()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
    public function build()
    {

        return $this
            ->from('info@sefng.org', $this->name())
            ->subject($this->subject)
            ->view('mail.contact');
    }
}
