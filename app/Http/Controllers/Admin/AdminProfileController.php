<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\Websitemail;
use App\Models\Admin;
use Auth;
use Hash;
use Mail;
class AdminProfileController extends Controller
{
    //
    public function index(){
        return view('admin.profile');
    }

    public function profile_submit(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
          
         ]);
         $admin_data = Admin::where('email', Auth::guard('admin')->user()->email)->first();
         if ($request->password != '') {
            # code...
            $request->validate([
                'password' => 'required',
                'retype_password' => 'required|same:password'
             ]);

             $admin_data = Hash::make($request->password);
         }

         if ($request->hasFile('photo')) {
            # code...
            $request->validate([
                'photo' => 'image|mimes:jpg,png,jpeg,webp,gif',
             ]);
             unlink(public_path('uploads/'. $admin_data->photo));
             $ext = $request->file('photo')->extension();
             $final_name = 'admin'.'.'.$ext;
             $request->file('photo')->move(public_path('uploads/'), $final_name);
             $admin_data->photo = $final_name;
         }

  
         $admin_data->name = $request->name;
         $admin_data->email = $request->email;
         $admin_data->save();
         return redirect()->back()->with('success', 'Profile updated successfully!');
    }
}
