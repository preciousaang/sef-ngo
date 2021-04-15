<?php

namespace App\Mail;

use App\Models\News;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewsLetter extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $news;
    public $mail;
    public function __construct(News $news, $mail)
    {
        //
        $this->news = $news;
        $this->mail = $mail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.newsletter');
    }
}
