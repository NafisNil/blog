<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomePageItem;
class AdminHomePageController extends Controller
{
    //
    public function index(){
        $page_data = HomePageItem::where('id', 1)->first();
        return view('admin.home_banner_show', compact('page_data'));
    }

    public function store(Request $request){
        $page_data = HomePageItem::where('id', 1)->first();
        $request->validate([
            'banner_person_name' => 'required' ,
         ]);

         if ($request->hasFile('banner_photo')) {
            # code...
            $request->validate([
                'banner_photo' => 'image|mimes:jpg,png,jpeg,webp,gif',
             ]);
           
             $ext = $request->file('banner_photo')->extension();
             $final_name = 'home_banner'.'.'.$ext;
             $request->file('banner_photo')->move(public_path('uploads/'), $final_name);
             $page_data->banner_photo = $final_name;
         }

         $page_data->banner_title = $request->banner_title;
         $page_data->banner_person_name = $request->banner_person_name;
         $page_data->banner_person_designation = $request->banner_person_designation;
         $page_data->banner_description = $request->banner_description;
         $page_data->banner_button_text = $request->banner_button_text;
         $page_data->banner_button_url = $request->banner_button_url;
         $page_data->update();
         return redirect()->back()->with('success', 'Data is updated successfully!');
    }
}
