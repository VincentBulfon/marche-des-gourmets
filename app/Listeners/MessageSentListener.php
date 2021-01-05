<?php

namespace App\Listeners;

use App\Mail\NewMessageMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class MessageSentListener implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object $event
     * @return void
     */
    public function handle($event)
    {
        $mail = new NewMessageMail($event->messageData);
        Mail::to('vincent.bulfon@gmail.com')->send($mail);
    }
}
