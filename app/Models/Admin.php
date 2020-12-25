<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email','profile_photo','password', 'address','number'
    ];

    protected $hidden=['password' , 'profile_photo'];
    public $timestamps = false;
}
