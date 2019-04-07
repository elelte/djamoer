<?php

namespace App\Http\Controllers\Web\Cms;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

use App\Model\admins;

class auth_controller extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('cms.login.login');
    }

    public function loginProcess(Request $request){
        $email    = $request->get('email');
        $admins   = admins::where('email',$email)
                          ->get();
        
        if (count($admins) > 0){
            $admin = $admins[0];
            $pass  = $request->get('pass');
            if(Hash::check($pass, $admin->password)) {
                $request->session()->put('user_id', $admin->id);
                return redirect('cms/');
            }
            else{
                print("salah 1");
            }
        }
        else{
            print("salah 2");
        }
    }

    public function logout(Request $request){
        $request->session()->flush();
        return redirect('cms/login');
    }
}
