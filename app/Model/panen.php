<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class panen extends Model
{
    //

    protected $table = 'panen';

    protected $fillable = [
        'name'
    ];

    protected $attributes = [
        'est_biaya' => 0,
        'est_keuntungan' => 0,
        'est_produksi' => 0,
        'est_durasi' => 0,
        'desc' => '',
        'status' => 0,
    ];

    protected $hidden = [
        'created_at', 'updated_at'
    ];
}
