<?php

namespace App\Http\Livewire\Pages\Rental;
use App\Models\Car;

use Livewire\Component;

class Vailable extends Component    
{
    public $search;
    protected $listeners = ['$refresh', 'search'];
    public function search($search)
    {
        $this->search = $search;
    }
    public function render()
    {$search = '%' . $this->search . '%';
        $cars = Car::where('state',true)->where('type', 'LIKE', $search)->get();
        return view('livewire.pages.rental.vailable',compact('cars'));
    }
}
