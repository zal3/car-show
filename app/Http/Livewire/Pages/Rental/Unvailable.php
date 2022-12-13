<?php

namespace App\Http\Livewire\Pages\Rental;

use Livewire\Component;
use App\Models\Car;
use App\Models\Rental;

class Unvailable extends Component
{
    public $return_date;
    public function render()
    {
        $cars = Car::where('state',false)->with('rent')->get();
        return view('livewire.pages.rental.unvailable',compact('cars'));
    }
}
