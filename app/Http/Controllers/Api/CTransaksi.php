<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\akumulasi;

class CTransaksi extends Controller
{
    public function get(request $req){
        $transaction = akumulasi::all();
        return response()->json($transaction, 200);
    }
}