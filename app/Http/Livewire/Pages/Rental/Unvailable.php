<?php

namespace App\Http\Livewire\Pages\Rental;

use Livewire\Component;

use App\Models\Car;
use App\Models\Rent;

class Unvailable extends Component
{public $search;
    protected $listeners = ['$refresh', 'search'];
    public function search($search)
    {
        $this->search = $search;
    }
    public function render()
    {$search = '%' . $this->search . '%';
        // $cars = Car::whereHas('rent' , function($q){
        //     $q->where('state',1);}
        //  )->where('type', 'LIKE', $search)->get();
        // ->where('state',false)->where('type', 'LIKE', $search)->get();
        $rents = Rent::where('state', 1) 
        ->whereHas('car', function ($q) use ($search) {
            $q->where('type', 'LIKE', $search);
        })->get();
        return view('livewire.pages.rental.unvailable', compact('rents'));
    }
}
