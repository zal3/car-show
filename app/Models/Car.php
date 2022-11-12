<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    use SoftDeletes;

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
    ];

        ###  Relationships ###
    
    //user 
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    //  rent 
    public function rent()
    {
        return $this->hasOne(Rent::class);
    }
            ### End Relationships ###
}