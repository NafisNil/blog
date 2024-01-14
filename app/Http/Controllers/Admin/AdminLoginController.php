<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\Websitemail;
use App\Models\Admin;
class AdminLoginController extends Controller
{
    //
    public function index(){
        return view('admin.login');
    }

    public function forget_password(){
        return view('admin.forget_password');
    }

    public function login_submit(Request $request){
        $request->validate([
           'email' => 'required|email' ,
           'password' => 'required|min:8'
        ]);

        $credential = [
            'email' => $request->email,
            'password' => $request->password
        ];


        if ( !Auth::guard('admin')->attempt($credential)) {
            # code...
            return redirect()->route('admin_dashboard');
        }
    }

   
}
