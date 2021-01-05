<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BecameExhibitor extends Component
{
    public $countries;
    public $regions;
    public $tags;

    public function render()
    {
        return view('livewire.became-exhibitor');
    }
}
