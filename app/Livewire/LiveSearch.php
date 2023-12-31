<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Item;

class LiveSearch extends Component
{
    public $search ="";
    public function render()
    {
        $items = Item::where('nama', 'like', '%' . $this->search . '%')->get();
        return view('livewire.live-search', ['items' => $items]);
    }
}
