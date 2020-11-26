<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password','phone','image',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function comments(){
        // return $this->hasMany('App\Item');
        return $this->hasMany('App\Comment', 'admin_id' , 'id');
    }
    public function adds(){
        return $this->hasMany('App\Add', 'admin_id' , 'id');
    }
}
