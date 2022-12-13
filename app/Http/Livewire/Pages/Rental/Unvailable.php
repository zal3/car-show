<?php

namespace App\Http\Livewire\Pages\Rental;

use Livewire\Component;
// use App\Models\Rent;
use App\Models\Car;

class Unvailable extends Component
{
    // public $rents;
    public function render()
    {
        $cars = Car::where('state',false)->get();
        // $rents = new Rent();
        // $rents =  Rent::with('car')->where('return_date', '>=', now())->get();
        return view('livewire.pages.rental.unvailable', compact('cars'));
    }
}
