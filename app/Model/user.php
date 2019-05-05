<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    //

    protected $table = 'users';

    protected $fillable = [ 
        'name', 
        'email', 
        'password', 
        'token'
    ];
    		
    protected $hidden = [
        'created_at', 'updated_at'
    ];

    protected $attributes = [
        'password' => "",
        'token' => ""
    ];
}
