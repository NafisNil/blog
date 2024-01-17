<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\Websitemail;
use App\Models\Admin;
use Auth;
use Hash;
class AdminLoginController extends Controller
{
    //
    public function index(){
        return view('admin.login');
    }

    public function forget_password(){
        return view('admin.forget_password');
    }

    public function forget_password_submit(Request $request){
        $request->validate([
            'email' => 'required|email' ,
         ]);
         $admin_data = Admin::where('email', $request->email)->first();
         
         if (!$admin_data) {
            # code...
             return redirect()->back()->with('error', 'Email does not exist!');
         }else{
           
         }


         $token = hash('sha256', time());
         $admin_data->token = $token;
         $admin_data->update();

         $reset_link = url('admin/reset-password/'.$token.'/'.$request->email);
         $subject = "Reset Password";
         $message = "Please click on the following link. <br>";
         $message .= '<a href="'.$reset_link.'">Click Here</a>';

         Mail::to($request->email)->send(new Websitemail($subject, $message));
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
                

        if ( Auth::guard('admin')->attempt($credential)) {
            # code...
            return redirect()->route('admin_home');
        }else{
            return redirect()->route('admin_login')->with('error', 'Wrong credentials!');
        }
    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin_login');
    }

   
}
