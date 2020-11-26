<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    //
    protected $fillable = [
        'book_name','user_name', 'phone','return_date', 'returned','book_id',
    ];
    

}
