<?php

namespace App\Http\Livewire;

use App\Models\Config;
use App\Models\Customer;
use Livewire\Component;
use Stripe\Stripe;

class Ticketing extends Component
{
    // public $name;
    // public $firstname;
    // public $phone;
    // public $email;

    public $tickets;
    public $price;
    // protected $submitted = false;
    // protected $paymentIntent;

    // protected $rules = [
    //     'name' => 'required',
    //     'firstname' => 'required',
    //     'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:9',
    //     'email' => 'required|email',
    //     'tickets' => 'required|numeric|min:1|max:10000',
    // ];

    // protected $messages = [
    //     'name.required' => 'Votre nom est requis.',
    //     'firstname.required' => 'Votre prénom est requis.',
    //     'phone.required' => 'Votre numéro de téléphone est requis.',
    //     'phone.regex' => 'Votre numéro de téléphone doit être dans les formats standards européens.',
    //     'phone.min' => 'Votre numéro de téléphone doit comporter au moins 9 carctères.',
    //     'email.required' => 'Votre adresse email est requise.',
    //     'email.email' => 'Votre adresse email doit être dans un format valide.',
    //     'tickets.required' => 'Le nombre de billets désiré est requis.',
    //     'tickets.min' => 'Le nombre de billets doit être de 1 au minilum.',
    // ];

    public function mount()
    {
        $this->price = Config::where('config_name', 'ticket_price')->first()->value;
        if (old('tickets')) {
            $this->tickets = old('tickets');
        }
    }

    // public function submit()
    // {
    //     $this->validate();
    //     $this->price = $this->tickets * Config::where('config_name', 'ticket_price')->first()->value;

    //     $customer = Customer::where('name', $this->name)->where('email', $this->email)->get()->first();
    //     if (!$customer) {
    //         $customer = Customer::create([
    //             'name' => $this->name,
    //             'firstname' => $this->firstname,
    //             'phone' => $this->phone,
    //             'email' => $this->email
    //         ]);
    //     }
    //     $customer->tickets()->create([
    //         'quantity' => $this->tickets,
    //         'price' => $this->price,
    //     ]);
    //     session()->flash('status', 'Votre commande à bien été passée.');
    //     session(['total' => $this->price]);

    //     Stripe::setApiKey(env('STRIPE_SECRET'));
    //     header('Content-Type: application/json');
    //     $this->paymentIntent = \Stripe\PaymentIntent::create([
    //         'amount' => round(session('total') * 100),
    //         'currency' => 'eur',
    //         // Verify your integration in this guide by including this parameter
    //         'metadata' => ['integration_check' => 'accept_a_payment'],
    //     ]);
    //     $this->submitted = true;
    // }

    public function getTotalPriceProperty()
    {
        if ($this->tickets > 0) {
            return $this->tickets * $this->price;
        }

        return 0;
    }

    public function render()
    {
        // if ($this->submitted == true) {
        //     return view('checkout.checkout', [
        //         'clientSecret' => $this->paymentIntent->client_secret,
        //         'total' => $this->price, 'nbrTickets' => $this->tickets
        //     ]);
        // } else {
        //     return view('livewire.ticketing');
        // }
        return view('livewire.ticketing');
    }
}
