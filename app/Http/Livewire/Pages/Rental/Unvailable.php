<?php

namespace App\Http\Livewire\Pages\Rental;

use Livewire\Component;
use App\Models\Rent;
use App\Models\Car;
use Livewire\WithPagination;


class Unvailable extends Component
{
    use WithPagination;
    public $search;
    protected $listeners = ['$refresh', 'search'];
    public function search($search)
    {
        $this->search = $search;
    }
    public function render()
    {$search = '%' . $this->search . '%';
        $cars = Car::where('state',false)->where('type', 'LIKE', $search)->with('rent')->orderByDesc('id')
        ->paginate(1);
        // $rents = new Rent();
        // $rents =  Rent::with('car')->where('return_date', '>=', now())->get();
        return view('livewire.pages.rental.unvailable', compact('cars'));
    }
}
