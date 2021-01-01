<?php

namespace App\Http\Livewire;

use App\Models\Region;
use App\Models\Tag;
use Livewire\Component;

class ExhibitorForm extends Component
{
    public $region;
    public $tag;
    public $rq;

    protected $queryString = ['region', 'tag'];

    public function tagChanged()
    {
        $this->emitUp('updateTag', $this->tag);
    }

    public function regionChanged()
    {
        $this->emitUp('updateRegion', $this->region);
    }

    public function render()
    {
        $tags = Tag::all(['id', 'tag']);
        $countries = Region::all(['id', 'region', 'country'])->groupBy('country')->all();

        return view('livewire.exhibitor-form', ['tags' => $tags, 'countries' => $countries, 'rq' => $this->rq]);
    }
}
