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
        $users = user::all();
        return view('cms.user.index')->with("data", $users);
    }

    public function viewEdit(Request $request, $id){
        $users = user::findOrFail($id);
        return view('cms.user.edit')->with("data", $users);
    }
}
