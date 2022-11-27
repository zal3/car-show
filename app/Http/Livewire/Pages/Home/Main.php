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
        $this->cars = Car::orderByDesc('id')->take(4)->get();

        return view('livewire.pages.home.main');
    }
}