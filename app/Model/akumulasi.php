<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class akumulasi extends Model
{
    //

    protected $table = 'akumulasi';

    protected $fillable = [
        'id_user', 'tipe', 'total', 'keterangan'
    ];
    		
    protected $hidden = [
        'created_at', 'updated_at'
    ];
}
