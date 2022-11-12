<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    use HasFactory;
    protected $fillable = [
        'car_id',
        'user_id',
        'location',
        'license',
        'rent_date',
        'return_date',
        'phone_num',
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
        return $this->belongsTo(Cars::class);
    }
            ### End Relationships ###

}