<?php

namespace App\Http\Livewire;

use App\Models\Config;
use App\Models\Customer;
use App\Models\Ticket;
use Livewire\Component;

class Ticketing extends Component
{
    public $name;
    public $firstname;
    public $phone;
    public $email;
    public $tickets;
    public $price;

    protected $rules = [
        'name' => 'required',
        'firstname' => 'required',
        'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:9',
        'email' => 'required|email',
        'quantity' => 'required|numeric|min:1|max:10000',
    ];

    protected $messages = [
        'name.required' => 'Votre nom est requis.',
        'firstname.required' => 'Votre prénom est requis.',
        'phone.required' => 'Votre numéro de téléphone est requis.',
        'phone.regex' => 'Votre numéro de téléphone doit être dans les formats standards européens.',
        'phone.min' => 'Votre numéro de téléphone doit comporter au moins 9 carctères.',
        'email.required' => 'Votre adresse email est requise.',
        'email.email' => 'Votre adresse email doit être dans un format valide.',
        'quantity.required' => 'Le nombre de billets désiré est requis.',
        'quantity.min' => 'Le nombre de billets doit être de 1 au minilum.',
    ];

    public function mount()
    {
        $this->price = Config::where('config_name', 'ticket_price')->first()->value;
    }

    public function submit()
    {
        $this->validate();

        $price = $this->tickets * Config::where('config_name', 'ticket_price')->first()->value;

        /**
         *
         * @param  \App\Models\Customer $customer
         * @param  array                $validatedData
         * @param  mixed                $price
         * @return \App\Models\Ticket
         */
        function storeTickets(Customer $customer, $price): Ticket
        {
            Ticket::create([
                'quantity' => $this->tickets,
                'price' => $price
            ]);
        };

        $customer = Customer::where('name', $this->name)->where('email', $this->email)->get()->first();
        if (!$customer) {
            $customer = Customer::create([
                'name' => $this->name,
                'firstname' => $this->firstname,
                'phone' => $this->phone,
                'email' => $this->email
            ]);
        }
        $customer->tickets()->create([
            'quantity' => $this->tickets,
            'price' => $price,
        ]);

        session()->flash('status', 'Votre commande à bien été passée.');

        return redirect()->to('billetterie#ticketing');
    }

    public function getTotalPriceProperty()
    {
        if ($this->tickets > 0) {
            return $this->tickets * $this->price;
        }

        return 0;
    }

    public function render()
    {
        return view('livewire.ticketing');
    }
}
