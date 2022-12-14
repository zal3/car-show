<?php

namespace App\Http\Livewire\Pages\Rental;

use Livewire\Component;

class Control extends Component
{
    // protected $listeners = ['updatedSelectedTab'];
    // public function updatedSelectedTab($value)
    // {
    //     $this->selectedTab = $value;
    // }

    public function mount()
    {
        $this->tabs = ['طلبات التاجير ','المقبول' ,'المرفوض'];
        $this->selectedTab = 0;
    }
    public function render()
    {
        return view('livewire.pages.rental.control');
    }
}
