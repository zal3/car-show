<?php

namespace App\Http\Livewire\Pages\Car;

use Livewire\Component;
use App\Models\Rent;

class Card extends Component
{
    public $car ,  $car_id;
    protected $listeners = ['$refresh'];
    public function render()
    {
        return view('livewire.pages.car.card');
    }
}