<?php

namespace App\Http\Livewire\Pages\Car;
use App\Models\Car;
use Livewire\Component;

class Main extends Component
{
    protected $listeners = ['$refresh', 'search'];
    public $search;
    public function search($search)
    {
        $this->search = $search;
    }

    public function render()
    {
        $search = '%' . $this->search . '%';
        $this->cars = Car::where('type', 'like', $search)->get();
        return view('livewire.pages.car.main');
    }
}