<?php

namespace App\Http\Livewire\Pages\Rental;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithFileUploads;
use App\Models\User;
use App\Models\Rent;
use App\Models\Car;



class Main extends Component
{
    use LivewireAlert;
    use WithFileUploads;
    public $image_path , $location,  $rent_date, $return_date, $phone_num, $car_id, $cars;

    protected $rules = [
        'location' => 'required',
        'rent_date' => 'required',
        'return_date' => 'required',
        'phone_num' => 'required',
        'image_path' => 'required',
        'car_id' => 'required',
    ];
    public function save()
    {
        $this->validate();
        $rental = new Rent();
        $rental->add($this->location, $this->rent_date, $this->return_date, $this->phone_num, $this->car_id);
        if ($this->image_path)
        $rental->add_image($this->image_path);

        $this->alert('success', 'تم     ', [
                    'position' => 'center',
                    'timer' => 3000,
                    'toast' => true,
                ]);
        $this->reset();
        return redirect()->to('/rental');
    }

    public function render()
    {
        //get car state is false
        $this->cars = Car::where('state', false)->get();
        return view('livewire.pages.rental.main');
    }
}
