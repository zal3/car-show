<?php

namespace App\Http\Livewire\Pages\Home;

use Livewire\Component;
use App\Models\Car;

class Main extends Component
{
    protected $listeners = [ '$refresh' ];
    public function render()
    {
        // get last 6 car
        $cars = Car::orderBy('id')->take(6)->get();

        return view('livewire.pages.home.main', compact('cars'));
    }
}