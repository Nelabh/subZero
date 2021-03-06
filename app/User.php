<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'name', 'email', 'password','type','password','contact','eval','marks','gender'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
  
    public $timestamps = false;
    
}
