<?php

namespace App\Http\Livewire\Pages\Rental;

use Livewire\Component;
use App\Models\Rent;


class Control extends Component
{
    public  $location ,$rent_date ,$return_date ,$phone_num ,$image_path;
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
        $rents = Rent::with('car','user')->get();
        return view('livewire.pages.rental.control',compact('rents'));
    }
}
