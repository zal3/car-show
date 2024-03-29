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
    protected $listeners = ['$refresh'];
    public $image_path, $location,  $rent_date, $return_date, $phone_num, $car_id, $cars;

    protected $rules = [
        'location' => 'required',
        'rent_date' => 'required',
        'return_date' => 'required',
        'phone_num' => 'required | numeric',
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
    }

    public function render()
    {
        $this->cars = Car::where('state', 1)->where('archive', 0)->get();
        return view('livewire.pages.rental.main');
    }
}
