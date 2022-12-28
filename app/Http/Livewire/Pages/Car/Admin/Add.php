<?php

namespace App\Http\Livewire\Pages\Car\Admin;

use Livewire\Component;
use App\Models\Car;
use App\Models\Rent;
use Livewire\WithFileUploads;

use Jantinnerezo\LivewireAlert\LivewireAlert;


class Add extends Component
{
    use LivewireAlert;
        use WithFileUploads;

        public $type , $category , $model , $sale_price , $number , $chassis_number ,
        $color , $note , $import_place , $import_date , $import_price , $state , $image_path;
        protected $rules = [
            'type' => 'required',
            'category' => 'required',
            'model' => 'required',
            'sale_price' => 'required',
            'number' => 'required|unique:cars',
            'chassis_number' => 'required|numeric|unique:cars',
            'color' => 'required',
            'import_place' => 'required',
            'import_date' => 'required',
            'import_price' => 'required',
            'state' => 'required',
            
            
        ];
        protected $message = [
            'number.required' => 'يجب ادخال رقم السيارة',
            'number.unique' => 'رقم السيارة موجود مسبقا',
            'number.numeric' => '   الأحرف غير مسموح بها ',
            'chassis_number.unique' => 'رقم السيارة  موجود مسبقا   ',
            'chassis_number.numeric' => '   الأحرف غير مسموح بها ',
            'chassis_number.required' => 'يجب ادخال رقم السيارة',
            
        ];

        public function add(Car $car)
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
            $car = new Car();
            $car->add($data);
            if ($this->image_path){
                $car->add_image($this->image_path);}
                //add the car to rent table
            // if ($this->state == 1){
            //     Rent::create([
            //         'user_id' => auth()->user()->id,
            //         'car_id' => $car->id,
            //         'location' => 'null',
            //         'rent_date' => date('Y-m-d'),
            //         'return_date' => date('Y-m-d'),
            //         'phone_num' => '123456789',
            //         'state' => null,
            //         'image_path' => 'null',
            //     ]);
            // }

            $this->reset();

            $this->alert('success', 'تم اضافة السيارة بنجاح  ', [
                    'position' => 'center',
                    'timer' => 3000,
                    'toast' => true,
                ]);
                redirect()->route('car');
        }

    public function render()
    {
        return view('livewire.pages.car.admin.add');
    }
}