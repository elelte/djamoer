<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class panen_detail extends Model
{
    //

    protected $table = 'panen_detail';

    protected $fillable = [
        'id_user', 'tipe', 'total', 'keterangan'
    ];
    		
    protected $hidden = [
        'created_at', 'updated_at'
    ];
}
