<?php

namespace App\Http\Livewire\Pages\Car;

use Livewire\Component;

class Card extends Component
{
    public $car ,  $car_id;
    public function render()
    {

        return view('livewire.pages.car.card');
    }
}