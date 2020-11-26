<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public $table= 'categories';
    protected $fillable = [
        'name', 'description', 'created_by','created_at','updated_at',
    ];
    public function books(){
        // return $this->hasMany('App\Item');
        return $this->hasMany('App\Book', 'category_id' , 'id');
    }
    public function cupbords(){
        // return $this->hasMany('App\Item');
        return $this->hasMany('App\Cupbord');
    }
}
