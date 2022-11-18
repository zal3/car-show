<?php

namespace App\Http\Livewire\Pages\Car\Admin;

use Livewire\Component;
use App\Models\Car;
use Livewire\WithFileUploads;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Edit extends Component
{
    use LivewireAlert;
    use WithFileUploads;
    public $type , $category , $model , $sale_price , $number , $chassis_number ,
        $color , $note , $import_place , $import_date , $import_price , $state, $new_image ,$car_id;
        protected $rules = [
            'type' => 'required',
            'category' => 'required',
            'model' => 'required',
            'sale_price' => 'required'
        ];
        public function mount ($car_id)
        {
            $this->car_id = $car_id;
            if($car_id){
                $car=Car::findOrFail($car_id);
                $this->type = $car->type;
                $this->category = $car->category;
                $this->model = $car->model;
                $this->sale_price = $car->sale_price;
                $this->number = $car->number;
                $this->chassis_number = $car->chassis_number;
                $this->color = $car->color;
                $this->note = $car->note;
                $this->import_place = $car->import_place;
                $this->import_date = $car->import_date;
                $this->import_price = $car->import_price;
                $this->state = $car->state;
                $this->image_path = $car->image_path;
            }
        }
        public function edit()
    {
        $this->validate();
        
            $data = [
                'type' => $this->type,
                'category' => $this->category,
                'model' => $this->model,
                'sale_price' => $this->sale_price,
                'number' => $this->number,
                'chassis_number' => $this->chassis_number,
                'color' => $this->color,
                'note' => $this->note,
                'import_place' => $this->import_place,
                'import_date' => $this->import_date,
                'import_price' => $this->import_price,
                'state' => $this->state,
            ];
        

        $car = Car::findOrFail($this->car_id);
        $car->edit($data);
        
        if ($this->new_image){
            
            $car->update_image($this->new_image); 
        }
        
        
        $this->alert('success', 'تم التعديل', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
        ]);
        redirect()->route('car');
    }
        
    public function render()
    {
        return view('livewire.pages.car.admin.edit');
    }
}