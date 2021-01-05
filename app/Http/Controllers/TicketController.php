<?php

namespace App\Http\Controllers;

use App\Http\Requests\TicketingRequest;
use App\Models\Config;
use App\Models\Customer;
use App\Models\Ticket;

class TicketController extends Controller
{
    public function store(TicketingRequest $request)
    {
        $validatedData = $request->validated();
        $price = $validatedData['quantity'] * Config::where('config_name', 'ticket_price')->first()->value;

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
                'quantity' => $validatedData['quantity'],
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
            'quantity' => $validatedData['quantity'],
            'price' => $price,
        ]);
        $request->session()->flash('status', 'Votre commande à bien été passée.');

        return redirect()->to('billetterie#ticketing');
    }
}
