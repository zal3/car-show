<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;


class Car extends Model
{
    use HasFactory;
    // use SoftDeletes;

    protected $fillable = [
        'user_id',
        'type',
        'category',
        'model',
        'sale_price',
        'number',
        'chassis_number',
        'color',
        'note',
        'import_place',
        'import_date',
        'import_price',
        'state',
        'image_path',
    ];

        ###  Relationships ###

    //  rent
    public function rent()
    {
        return $this->hasOne(Rent::class);
    }
            ### End Relationships ###

            ######### FUNCTIONS ##########

    ### add ###
    public function add($data)
    {
        $this->fill($data);
        $this->save();
    }
    ### End add ###

    ### edit ###
    public function edit($data)
    {
        $this->update($data);
    }
    ### End edit ###

    


            ### image ###

    //add_image
    public function add_image($image)
    {
        $ext = $image->extension();
        $name =  \Str::random(10) . '.' . $ext;
        $image = $image->storeAs('public/cars/' . $this->id . '/images/', $name);
        $this->image_path = 'storage/cars/' . $this->id . '/images/' . $name;
        $this->save();
    }

    //update_image
    public function update_image($image)
    {
        $ext = $image->extension();
        $name =  \Str::random(10) . '.' . $ext;
        $image = $image->storeAs('public/cars/' . $this->id . '/images/', $name);
        $this->image_path = 'storage/cars/' . $this->id . '/images/' . $name;
        $this->save();
    }

    ### End image ###
}