<?php

namespace App\Listeners;

use App\Events\ExhibitorAdded;
use App\Mail\NewExhibitorMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class ExhibitorAddedListener implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Handle the event.
     *
     * @param  ExhibitorAdded $event
     * @return void
     */
    public function handle(ExhibitorAdded $event)
    {
        $mail = new NewExhibitorMail($event->exhibitor);
        Mail::to('dominique.vilain@hepl.be')->send($mail);
    }
}
