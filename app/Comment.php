<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public  $table = 'comments'; 

    public function book(){// this optional  to name it 
        
        return $this->belongsTo( 'App\Book' , 'book_id',  'id');
    }

    public function admin(){ // this optional  to name it 
         
        return $this->belongsTo( 'App\Admin' , 'admin_id',  'id');
    }
}
