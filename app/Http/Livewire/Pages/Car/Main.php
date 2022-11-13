<?php

namespace App\Http\Livewire\Pages\Car;
use App\Models\Car;
use Livewire\Component;

class Main extends Component
{
    protected $listeners = ['$refresh'];

    public function render()
    {
        $cars = Car::all();
        return view('livewire.pages.car.main', compact('cars'));
    }
}