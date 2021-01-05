<?php

namespace App\Http\Controllers;

use App\Events\MessageSent;
use App\Http\Requests\ContactFormRequest;

class ContactController extends Controller
{
    /**
     * dispatch event for sending an email to an admin
     * @return void
     */
    public function store(ContactFormRequest $request)
    {
        $validatedData = $request->validated();
        MessageSent::dispatch($validatedData);

        $request->session()->flash('status', 'Votre message a bien été envoyé.');

        return redirect('/contact#messageForm');
    }
}
