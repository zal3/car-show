<?php

namespace App\Http\Livewire\Pages\Car;
use App\Models\Car;
use Livewire\Component;

class Main extends Component
{
    protected $listeners = ['$refresh'];

    public function render()
    {
        $this->cars = Car::orderByDesc('id')->get();
        return view('livewire.pages.car.main');
    }
}