<?php

namespace App\Http\Livewire\Ui;

use Livewire\Component;

class FilterProjects extends Component
{
     public $model = null , $color = null ;
    public function render()
    {
        $this->emit('filterProjects', $this->model , $this->color );
        return view('livewire.ui.filter-projects');
    }
}
