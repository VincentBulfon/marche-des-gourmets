<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ExhibitorForm extends Component
{
    public $region;
    public $tag;
    public $rq;
    public $tags;
    public $countries;

    protected $queryString = ['region', 'tag'];

    public function tagChanged()
    {
        $this->emitTo('exhibitors', 'updateTag', $this->tag);
    }

    public function regionChanged()
    {
        $this->emitTo('exhibitors', 'updateRegion', $this->region);
    }

    public function render()
    {
        return view('livewire.exhibitor-form', ['rq' => $this->rq]);
    }
}
