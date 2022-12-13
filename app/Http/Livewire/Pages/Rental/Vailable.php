<?php

namespace App\Http\Livewire\Pages\Rental;
use App\Models\Car;

use Livewire\Component;

class Vailable extends Component
{
    
    public function render()
    {
        $cars = Car::where('state',true)->get();
        return view('livewire.pages.rental.vailable',compact('cars'));
    }
}
