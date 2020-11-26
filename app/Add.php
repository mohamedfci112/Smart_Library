<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Add extends Model
{
    //
    public  $table = 'adds'; 

    // public function admin(){// this optional  to name it 
    //     // return $this->belongsTo('App\Order');
    //     return $this->belongsTo('App\Admin', 'admin', 'id');
    // }

}
