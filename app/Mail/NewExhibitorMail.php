<?php

namespace App\Mail;

use App\Models\Config;
use App\Models\Exhibitor;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewExhibitorMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;
    public $exhibitor;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Exhibitor $exhibitor)
    {
        $this->exhibitor = $exhibitor;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $senderEmail = Config::where('config_name', 'market_email')->get()->first()->value;

        return $this->from($senderEmail)->view('emails.newExhibitor');
    }
}
