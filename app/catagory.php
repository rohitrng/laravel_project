<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class catagory extends Model
{
    //
    protected $table = 'catagories';

    protected $fillable = [
        'name',
        'id'
    ];
}
