<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class Footer extends Component
{
    protected $listeners = ['$refresh'];
    public function render()
    {
        return view('livewire.components.footer');
    }
}