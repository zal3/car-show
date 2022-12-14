<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Car;
use App\Models\Rent;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'is_admin',
        'phone_number',
        'telegram_username',
        'profile_photo_path'

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    // SCOPES
    public function scopeAdmins($query){
        return $query->where('is_admin', true);
    }

    ### Relationships ###

    //rent
    public function rents()
    {
        return $this->hasMany(Rent::class);
    }

    public function admin()
    {
        return $this->hasOne(Admin::class);
    }
            ### End Relationships ###

        public function edit($data)    {
        $this->fill($data);
        $this->save();
    }

    public function addProfile($file ){
        
        $ext = $file->extension();
        $name=\Str::random(10).'.'.$ext;
        $file->storeAs('public/' . '/profile/'. $this->id .'/' ,$name);
        $this->profile_photo_path = 'storage/'  . '/profile/'.$this->id.'/'.$name;
        $this->save();
    }
    public function add($data){
        $this->fill($data);
        $this->save();
    }
    // public function getProfilePhotoUrlAttribute()
    // {
    //     return $this->profile_photo_path ?? 'https://www.gravatar.com/avatar/'.md5($this->email).'?s=200&d=mm';
    // }
}