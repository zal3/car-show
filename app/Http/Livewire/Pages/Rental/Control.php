<?php

namespace App\Http\Livewire\Pages\Rental;

use Livewire\Component;
use App\Models\Rent;


class Control extends Component
{
    protected $listeners = ['$refresh'];
    public  $location ,$rent_date ,$return_date ,$phone_num ,$image_path,$state;
    public function no($id)
    {
        $rent = Rent::find($id);
        $rent->update([
            'state' => 0
        ]);
        
        redirect()->route('control');

    }
    public function accebted($id)
    {
        $rent = Rent::find($id);
        $rent->update([
            'state' => 1
        ]);
        
        redirect()->route('control');
    }
    public function rejected($id)
    {
        $rent = Rent::find($id);
        $rent->update([
            'state' => 2
        ]);
        
        redirect()->route('control');
    }

        
    public function render()
    {
        
        $this->rents = Rent::with('car','user')->where('state',0)->get();
        $this->rents1 = Rent::with('car','user')->where('state',1)->get();
        $this->rents2 = Rent::with('car','user')->where('state',2)->get();
        return view('livewire.pages.rental.control');
    }
}
