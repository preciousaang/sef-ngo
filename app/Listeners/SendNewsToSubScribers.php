<?php

namespace App\Listeners;

use App\Events\NewsCreated;
use App\Mail\NewsLetter;
use App\Models\Subscriber;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendNewsToSubScribers
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    private $subscribers;
    public function __construct(Subscriber $subscriber)
    {
        //
        $this->subscribers = $subscriber->all();
    }

    /**
     * Handle the event.
     *
     * @param  NewsCreated  $event
     * @return void
     */
    public function handle(NewsCreated $event)
    {
        //
        foreach ($this->subscribers as $subscriber) {
            Mail::to($subscriber->email)->send(new NewsLetter($event->news, $subscriber->email));
        }
    }
}
