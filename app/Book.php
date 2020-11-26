<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    public $table= 'books';
    protected $fillable = ['isbn' ,'title','total','avilable', 'description','Bookcover','author_id','category_id','publisher_id','cupbord_id','language','created_by',];
    // public $timestamps = false;
    public function category(){// this optional  to name it 
        // return $this->belongsTo('App\Order');
        return $this->belongsTo('App\Category','category_id','id');
    }

    public function comments(){
        // return $this->hasMany('App\Item');
        return $this->hasMany('App\Comment', 'book_id' , 'id');
    }
}
