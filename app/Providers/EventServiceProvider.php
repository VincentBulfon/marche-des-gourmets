<?php

namespace App\Providers;

use App\Events\ExhibitorAdded;
use App\Events\MessageSent;
use App\Listeners\ExhibitorAddedListener;
use App\Listeners\MessageSentListener;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        ExhibitorAdded::class => [
            ExhibitorAddedListener::class
        ],
        MessageSent::class => [
            MessageSentListener::class
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
