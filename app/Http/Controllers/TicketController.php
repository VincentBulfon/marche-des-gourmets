<?php

namespace App\Http\Controllers;

use App\Http\Requests\TicketingRequest;
use App\Models\Config;
use App\Models\Customer;
use App\Models\Ticket;
use Stripe\Stripe;

class TicketController extends Controller
{
    public function store(TicketingRequest $request)
    {
        $validatedData = $request->validated();
        $price = $validatedData['tickets'] * Config::where('config_name', 'ticket_price')->first()->value;

        /**
         *
         * @param  \App\Models\Customer $customer
         * @param  array                $validatedData
         * @param  mixed                $price
         * @return \App\Models\Ticket
         */
        function storeTickets(Customer $customer, array $validatedData, $price): Ticket
        {
            Ticket::create([
                'quantity' => $validatedData['tickets'],
                'price' => $price
            ]);
        };

        $customer = Customer::where('name', $validatedData['name'])->where('email', $validatedData['email'])->get()->first();
        if (!$customer) {
            $customer = Customer::create([
                'name' => $validatedData['name'],
                'firstname' => $validatedData['firstname'],
                'phone' => $validatedData['phone'],
                'email' => $validatedData['email']
            ]);
        }
        $customer->tickets()->create([
            'quantity' => $validatedData['tickets'],
            'price' => $price,
        ]);
        $request->session()->flash('status', 'Votre commande à bien été passée.');
        session(['total' => $price]);

        Stripe::setApiKey(env('STRIPE_SECRET'));
        header('Content-Type: application/json');
        $paymentIntent = \Stripe\PaymentIntent::create([
            'amount' => round(session('total') * 100),
            'currency' => 'eur',
            // Verify your integration in this guide by including this parameter
            'metadata' => ['integration_check' => 'accept_a_payment'],
        ]);

        return view('checkout.checkout', [
            'clientSecret' => $paymentIntent->client_secret,
            'total' => $price, 'nbrTickets' => $validatedData['tickets']
        ]);
    }
}
