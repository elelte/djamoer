<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

use App\Model\user;

class usersController extends Controller
{
    //
    public function store(request $req){
        $name = $req->input('name');
        $pass = $req->input('pass');
        $email = $req->input('email');
        $token = sha1(time());
        
        $user             = new user();
        $user->name       = $name;
        $user->email      = $email;
        $user->password   = $pass;
        $user->token      = $token;
        $user->save();
        
        return response()->json($user, 200);
    }

    public function logs(request $req){
        $email = $req->input('email');
        $pass  = $req->input('pass');

        $user  = user::select("token")
                 ->where('email', $email)
                 ->where('password', $pass)->first();
        
        if ($user){
            return response()->json($user, 200);
        }
        else{
            return response()->json([
                'message' => "User not exist"
            ], 401);
        }
    }

    public function detail(request $req){
        echo " detail";
    }
}
