<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class client_list extends Model
{
    protected $fillable =[
        'name', 'email'
    ];
}
