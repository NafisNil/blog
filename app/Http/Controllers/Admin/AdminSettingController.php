<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
class AdminSettingController extends Controller
{
    //
    public function index(){
        $setting_data = Setting::where('id', 1)->first();
        return view('admin.setting', compact('setting_data'));
    }

    public function update(Request $request){
        $request->validate([
            'footer_copyright' => 'required',
            'theme_color' => 'required',
          
         ]);

         $obj = Setting::where('id',1)->first();
         if ($request->hasFile('logo')) {
            # code...
           
            $request->validate([
                'logo' => 'image|mimes:jpg,png,jpeg,webp,gif',
             ]);
            
             $ext = $request->file('logo')->extension();
             
             $final_name = 'logo_'.time().'.'.$ext;
             
             $request->file('logo')->move(public_path('uploads/'), $final_name);
           //  dd($final_name);
             $obj->logo = $final_name;
         }


         if ($request->hasFile('favicon')) {
            # code...
           
            $request->validate([
                'favicon' => 'image|mimes:jpg,png,jpeg,webp,gif',
             ]);
            
             $ext = $request->file('favicon')->extension();
             
             $final_name = 'favicon_'.time().'.'.$ext;
             
             $request->file('favicon')->move(public_path('uploads/'), $final_name);
           //  dd($final_name);
             $obj->favicon = $final_name;
         }


         if ($request->hasFile('logo_footer')) {
            # code...
           
            $request->validate([
                'logo_footer' => 'image|mimes:jpg,png,jpeg,webp,gif',
             ]);
            
             $ext = $request->file('logo_footer')->extension();
             
             $final_name = 'logo_footer_'.time().'.'.$ext;
             
             $request->file('logo_footer')->move(public_path('uploads/'), $final_name);
           //  dd($final_name);
             $obj->logo_footer = $final_name;
         }


    }
}
