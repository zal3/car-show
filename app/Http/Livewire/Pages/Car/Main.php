<?php

namespace App\Http\Livewire\Pages\Car;
use App\Models\Car;
use Livewire\Component;
use Livewire\WithPagination;


class Main extends Component
{
    use WithPagination;
    protected $listeners = ['$refresh', 'search', 'filterProjects'];
    public $search , $model , $color   ;
    public function search($search)
    {
        $this->search = $search;
    }
    public function filterProjects($model , $color )
    {
        $this->model = $model;
        $this->color = $color;
        
    }
    public function render()
    {
        $search = '%' . $this->search . '%';
        $cars = Car::where('type', 'LIKE', $search)->where('archive', 0)
        ->orderBy('id', 'DESC');
        if ($this->model) $cars->where('model', $this->model);
        if($this->color) $cars->where('color', $this->color);
        
            $cars = $cars->paginate(40);
        return view('livewire.pages.car.main' , compact('cars'));
    }
}