<?php

namespace App\Http\Livewire\Pages\Rental;

use Livewire\Component;
use App\Models\Rent;
use App\Models\Car;
use Jantinnerezo\LivewireAlert\LivewireAlert;



class Control extends Component
{
    use LivewireAlert;

    protected $listeners = ['$refresh'];
    public  $location ,$rent_date ,$return_date ,$phone_num ,$image_path,$state, $rents , $rents2 , $rents1;
    public function no($id)
    {
    $rent = Rent::find($id);
        $rent->update([
            'state' => 0
        ]);
        $this->alert('success', 'تم استرجاع السيارة ', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
        ]);
        redirect()->route('control');

    }
    public function accebted($id)
    {
        $rent = Rent::find($id);
        $rent->update([
            'state' => 1
        ]);
        $car = Car::find($rent->car_id);
        $car->update([
            'state' => 0
        ]);
        $this->alert('success', 'تم تاجير السيارة ', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
        ]);
        redirect()->route('control');
    }
    public function rejected($id)
    {
        $rent = Rent::find($id);
        $rent->update([
            'state' => 2
        ]);
        $car = Car::find($rent->car_id);
        $car->update([
            'state' => 1
        ]);
        $this->alert('success', 'تم  الرفض ', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
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
