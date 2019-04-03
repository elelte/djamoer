<?php

namespace App\Http\Controllers\Web\Cms;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class akumulasi extends Controller
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
        return view('cms.akumulasi.index');
    }

    public function viewEdit(){
        return view('cms.akumulasi.edit');
    }
}
