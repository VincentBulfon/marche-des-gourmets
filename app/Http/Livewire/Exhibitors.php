<?php

namespace App\Http\Livewire;

use App\Models\Exhibitor;
use Livewire\Component;
use Livewire\WithPagination;

class Exhibitors extends Component
{
    use WithPagination;

    public $rq;
    public $region = 'all';
    public $tag = 'all';
    public $isBio = false;

    protected $listeners = [
        'updateRegion',
        'updateTag',
        'isBio' => 'setBio',
    ];

    protected $queryString = ['isBio'];

    public function mount()
    {
        if (isset($this->rq['tag'])) {
            $this->tag = $this->rq['tag'];
        }
        if (isset($this->rq['region'])) {
            $this->region = $this->rq['region'];
        }
    }

    public function updateTag($tag)
    {
        $this->tag = $tag;
        $this->resetPage();
    }

    public function updateRegion($region)
    {
        $this->region = $region;
        $this->resetPage();
    }

    public function setBio()
    {
        $this->isBio = !$this->isBio;
        $this->resetPage();
    }

    public function render()
    {
        $request = Exhibitor::query();
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
        $data = $request->where('validated', true)->orderBy('company_name', 'ASC')->paginate(9);

        return view('livewire.exhibitors', ['data' => $data, 'rq' => $this->rq]);
    }
}
