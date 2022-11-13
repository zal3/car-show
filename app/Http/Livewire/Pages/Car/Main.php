<?php

namespace App\Http\Livewire\Pages\Car;
use App\Models\Car;
use Livewire\Component;

class Main extends Component
{
    protected $listeners = ['$refresh'];
    public function getCar()
    {
        $this->emit(
            'getCar',
            $this->ti
    }
    public function render()
    {

        return view('livewire.pages.car.main', compact('cars'));
    }
}