<?php

namespace App\Http\Livewire;

use App\Models\Exhibitor;
use Livewire\Component;
use Livewire\WithPagination;

class Exhibitors extends Component
{
    use WithPagination;

    public $rq;
    public $data;
    public $region = 'all';
    public $tag = 'all';
    public $isBio = false;

    protected $listeners = [
        'updateRegion',
        'updateTag',
        'isBio' => 'setBio',
    ];

    protected $queryString = ['isBio'];

    public function updateTag($tag)
    {
        $this->tag = $tag;
    }

    public function updateRegion($region)
    {
        $this->region = $region;
    }

    public function setBio()
    {
        $this->isBio = !$this->isBio;
    }

    public function render()
    {
        $request = Exhibitor::query()->where('is_draft', false);
        if ($this->tag !== 'all') {
            $request = $request->whereHas('tags', function ($query) {
                return  $query->where('tags.id', $this->tag);
            });
        }
        if ($this->region !== 'all') {
            $request = $request->whereHas('region', function ($query) {
                return  $query->where('regions.id', $this->region);
            });
        }
        if ($this->isBio === true) {
            $request = $request->where('is_bio', true);
        }
        $this->data = $request->orderBy('company_name', 'ASC')->get();

        return view('livewire.exhibitors', ['data' => $this->data, 'rq' => $this->rq]);
    }
}
