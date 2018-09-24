<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class usersController extends Controller
{
    //
    public function logs(request $req){
        $name = $req->input('name');
        $pass = $req->input('pass');
        
        echo $name;
    }
}
