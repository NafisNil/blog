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
            'footer_copyright_text' => 'required',
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


         $obj->footer_text = $request->footer_text;
         $obj->footer_icon_1 = $request->footer_icon_1;
         $obj->footer_icon_1_url = $request->footer_icon_1_url;
         $obj->footer_icon_2 = $request->footer_icon_2;
         $obj->footer_icon_2_url = $request->footer_icon_2_url;
         $obj->footer_icon_3 = $request->footer_icon_3;
         $obj->footer_icon_3_url = $request->footer_icon_3_url;
         $obj->footer_icon_4 = $request->footer_icon_4;
         $obj->footer_icon_4_url = $request->footer_icon_4_url;
         $obj->footer_copyright_text = $request->footer_copyright_text;
         $obj->preloader_status = $request->preloader_status;
         $obj->theme_color = $request->theme_color;
         $obj->update();
         return redirect()->back()->with('success', 'Data is updated successfully!');


    }
}
