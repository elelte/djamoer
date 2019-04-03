<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class admins extends Model
{
    //
    protected $table = 'admins';

    protected $hidden = [
        'created_at', 'updated_at'
    ];
}
