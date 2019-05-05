<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class panen extends Model
{
    //

    protected $table = 'panen';

    protected $fillable = [
        'id_user', 'tipe', 'total', 'keterangan'
    ];
    		
    protected $hidden = [
        'created_at', 'updated_at'
    ];
}
