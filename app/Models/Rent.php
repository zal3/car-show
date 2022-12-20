<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'car_id',
        'location',
        'rent_date',
        'return_date',
        'phone_num',
        'state',
        'image_path',
    ];

        ### Relationships ###
    //user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    // car
    public function car()
    {
        return $this->belongsTo(Car::class);
    }
            ### End Relationships ###
            public function add($location, $rent_date, $return_date, $phone_num, $car_id)
            {
                $this->user_id = auth()->user()->id;
                $this->car_id = $car_id;
                $this->location = $location;
                $this->rent_date = $rent_date;
                $this->return_date = $return_date;
                $this->phone_num = $phone_num;
                $this->save();
            }

            public function add_image($image)
    {
        $ext = $image->extension();
        $name =  \Str::random(10) . '.' . $ext;
        $image = $image->storeAs('public/linces/' . $this->id . '/images/', $name);
        $this->image_path = 'storage/linces/' . $this->id . '/images/' . $name;
        $this->save();
    }

    //update_image
    public function update_image($image)
    {
        $ext = $image->extension();
        $name =  \Str::random(10) . '.' . $ext;
        $image = $image->storeAs('public/linces/' . $this->id . '/images/', $name);
        $this->image_path = 'storage/linces/' . $this->id . '/images/' . $name;
        $this->save();
    }
}