<?php

namespace App\Http\Livewire\Pages\Car;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Car;

class Archive extends Component
{use WithPagination;
    protected $listeners = ['$refresh', 'search'];
    public $search , $model , $color   ;
    public function search($search)
    {
        $this->search = $search;
    }
    public function render()
    {$search = '%' . $this->search . '%';
        $cars = Car::where('type', 'LIKE', $search)->where('archive', 1)
        ->orderBy('id', 'DESC');
        $cars = $cars->paginate(40);
        return view('livewire.pages.car.archive', compact('cars'));
    }
}
