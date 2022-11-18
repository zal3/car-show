<?php

namespace App\Http\Livewire\Pages\Car\Admin;

use Livewire\Component;
use App\Models\Car;
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
            'sale_price' => 'required'
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
                dd($this->image_path);
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