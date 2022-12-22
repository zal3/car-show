<?php

namespace App\Http\Livewire\Pages\Car;

use Livewire\Component;
use App\Models\Car;
use Jantinnerezo\LivewireAlert\LivewireAlert;


class CarPage extends Component
{
        use LivewireAlert;
public $car_id ,$type ,$car , $category ,$model, $sale_price , $number ,$chassis_number , $color , $note , $import_place , $import_date , $import_price , $state , $image_path;
    protected $listeners = [ '$refresh','delete'];
    public function mount($car_id)
    {
        $this->car_id = $car_id;
        $this->car = Car::findOrFail($car_id);
        $this->type = $this->car->type;
        $this->category = $this->car->category;
        $this->model = $this->car->model;
        $this->sale_price = $this->car->sale_price;
        $this->number = $this->car->number;
        $this->chassis_number = $this->car->chassis_number;
        $this->color = $this->car->color;
        $this->note = $this->car->note;
        $this->import_place = $this->car->import_place;
        $this->import_date = $this->car->import_date;
        $this->import_price = $this->car->import_price;
        $this->state = $this->car->state;
        $this->image_path = $this->car->image_path;
    }

    public function delete()
    {
        Car::findOrFail($this->car_id)->delete();
        $this->alert('success', 'تم حذف السيارة', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
        ]);
        $this->emitUp('$refresh');
        $this->emitTo('pages.cars.main', '$refresh');
        redirect()->route('car');


    }

    public function confirm($id)
    {
        $this->car_id = $id;
        $this->alert('warning', 'هل انت متأكد من حذف السيارة؟', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
            'showConfirmButton' => true,
            'onConfirmed' => 'delete',
            'showCancelButton' => true,
            'onDismissed' => '',
        ]);
    }

    public function archive()
    {
        $this->car->archive = 1;
        $this->car->save();
        $this->alert('success', 'تم ارشفة السيارة', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
        ]);
        $this->emitUp('$refresh');
        $this->emitTo('pages.cars.main', '$refresh');
        redirect()->route('car');
    }
    public function unarchive()
    {
        $this->car->archive = 0;
        $this->car->save();
        $this->alert('success', 'تم ارجاع السيارة من الارشيف', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
        ]);
        $this->emitUp('$refresh');
        $this->emitTo('pages.cars.archive', '$refresh');
        redirect()->route('car');
    }
    

public function render()
    {
        return view('livewire.pages.car.car-page');
    }
}