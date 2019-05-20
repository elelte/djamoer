<?php

namespace App\Http\Controllers\Web\Cms\panen;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\panen;

class tahap_panen_controller extends Controller
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
        // $users = user::paginate(10);
        // return view('cms.panen.index')->with("data", $users);
        return view('cms.panen.tahap.index');
    }
    public function viewEdit(){
        return view('cms.panen.edit');
    }
}
