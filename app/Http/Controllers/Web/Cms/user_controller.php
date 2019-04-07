<?php

namespace App\Http\Controllers\Web\Cms;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\user;

class user_controller extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewIndex(){
        $users = user::paginate(10);
        return view('cms.user.index')->with("data", $users);
    }

    public function viewEdit(Request $request, $id){
        $users = user::findOrFail($id);
        return view('cms.user.edit')->with("data", $users);
    }

    public function viewAdd(Request $request){
        return view('cms.user.add');
    }
    
    public function createUser(Request $request){
        $email       = $request->get('email');
        $name        = $request->get('name');
        $phone       = $request->get('phone');

        $user        = new user();
        $user->email = $email;
        $user->name  = $name;
        $user->phone = $phone;
        $user->save();

        return $this->viewIndex();
    }

    public function updateUser(Request $request, $id){
        $email       = $request->get('email');
        $name        = $request->get('name');
        $phone       = $request->get('phone');

        $user        = user::findOrFail($id);
        $user->email = $email;
        $user->name  = $name;
        $user->phone = $phone;
        $user->save();

        return $this->viewIndex();
    }
}
