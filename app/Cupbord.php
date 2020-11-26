<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cupbord extends Model
{
    //
    public $table= 'cupbords';
    // protected $fillable = ['title', 'description','image','author','category_id'];
    // public $timestamps = false;
    public function category(){ // this optional  to name it 
        // return $this->belongsTo('App\Order');
        return $this->belongsTo('App\Category');
    }

    
}
