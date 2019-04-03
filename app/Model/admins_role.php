<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class admins_role extends Model
{
    //
    protected $table = 'admins_role';

    protected $hidden = [
        'created_at', 'updated_at'
    ];
}
