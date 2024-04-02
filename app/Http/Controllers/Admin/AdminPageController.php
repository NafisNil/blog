<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PageItem;
class AdminPageController extends Controller
{
    //
    public function services(){
        $page_data = PageItem::where('id', 1)->first();
        return view('admin.page_services', compact('page_data'));
    }

    public function services_update(Request $request){
        $page_data = PageItem::where('id', 1)->first();
        
         if ($request->hasFile('services_banner')) {
            # code...
            $request->validate([
                'services_banner' => 'image|mimes:jpg,png,jpeg,webp,gif',
                'services_heading' => 'required',
             ]);
           
             $ext = $request->file('services_banner')->extension();
             $final_name = 'banner_services_'.time().'.'.$ext;
             $request->file('services_banner')->move(public_path('uploads/'), $final_name);
             $page_data->services_banner = $final_name;
         }

         $page_data->services_heading = $request->services_heading;
         $page_data->services_seo_title = $request->services_seo_title;
         $page_data->services_seo_meta_description = $request->services_seo_meta_description;

         $page_data->update();
         return redirect()->back()->with('success', 'Data is updated successfully!');
    }



    public function portfolio(){
        $page_data = PageItem::where('id', 1)->first();
        return view('admin.page_portfolios', compact('page_data'));
    }

    public function portfolio_update(Request $request){
        $page_data = PageItem::where('id', 1)->first();
        
         if ($request->hasFile('portfolio_banner')) {
            # code...
            $request->validate([
                'portfolio_banner' => 'image|mimes:jpg,png,jpeg,webp,gif',
                'portfolio_heading' => 'required',
             ]);
           
             $ext = $request->file('portfolio_banner')->extension();
             $final_name = 'banner_portfolios_'.time().'.'.$ext;
             $request->file('portfolio_banner')->move(public_path('uploads/'), $final_name);
             $page_data->portfolio_banner = $final_name;
         }

         $page_data->portfolio_heading = $request->portfolio_heading;
         $page_data->portfolio_seo_title = $request->portfolio_seo_title;
         $page_data->portfolio_seo_meta_description = $request->portfolio_seo_meta_description;

         $page_data->update();
         return redirect()->back()->with('success', 'Data is updated successfully!');
    }


    public function about(){
        $page_data = PageItem::where('id', 1)->first();
        return view('admin.page_about', compact('page_data'));
    }

    public function about_update(Request $request){
        $page_data = PageItem::where('id', 1)->first();
       
        $request->validate([
          
            'about_heading' => 'required',
            'about_description' => 'required',
         ]);
         if ($request->hasFile('about_banner')) {
            # code...
            $request->validate([
                'about_banner' => 'image|mimes:jpg,png,jpeg,webp,gif',
               
             ]);
           
             $ext = $request->file('about_banner')->extension();
             $final_name = 'banner_about_'.time().'.'.$ext;
             $request->file('about_banner')->move(public_path('uploads/'), $final_name);
             $page_data->about_banner = $final_name;
         }


         if ($request->hasFile('about_photo')) {
            # code...
            $request->validate([
                'about_photo' => 'image|mimes:jpg,png,jpeg,webp,gif',
               
             ]);
           
             $ext = $request->file('about_photo')->extension();
             $final_name = 'photo_about_'.time().'.'.$ext;
             $request->file('about_photo')->move(public_path('uploads/'), $final_name);
             $page_data->about_photo = $final_name;
         }

         $page_data->about_heading = $request->about_heading;
         $page_data->about_description = $request->about_description;
         $page_data->about_seo_title = $request->about_seo_title;
         $page_data->about_seo_meta_description = $request->about_seo_meta_description;

         $page_data->update();
         return redirect()->back()->with('success', 'Data is updated successfully!');
    }

    public function about_photo_delete(){
        $obj = PageItem::where('id',1)->first();
        unlink(public_path('uploads/'.$obj->about_photo));
        $obj->about_photo = '';
        $obj->update();
        return redirect()->back()->with('success', 'Photo deleted successfully!');
    }


    public function contact(){
        $page_data = PageItem::where('id', 1)->first();
        return view('admin.page_contact', compact('page_data'));
    }

    public function contact_update(Request $request){
        $page_data = PageItem::where('id', 1)->first();
        $request->validate([
            'contact_heading' => 'required',
            'contact_email' => 'required',
            'contact_phone' => 'required',
            'contact_map_iframe' => 'required',
            'contact_address' => 'required',
         ]);
         if ($request->hasFile('contact_banner')) {
            # code...
            $request->validate([
                'contact_banner' => 'image|mimes:jpg,png,jpeg,webp,gif',
               
             ]);
           
             $ext = $request->file('contact_banner')->extension();
             $final_name = 'banner_contact_'.time().'.'.$ext;
             $request->file('contact_banner')->move(public_path('uploads/'), $final_name);
             $page_data->contact_banner = $final_name;
         }

         $page_data->contact_heading = $request->contact_heading;
         $page_data->contact_email= $request->contact_email;
         $page_data->contact_phone = $request->contact_phone;
         $page_data->contact_map_iframe = $request->contact_map_iframe;
         $page_data->contact_address = $request->contact_address;
         $page_data->contact_seo_title = $request->contact_seo_title;
         $page_data->contact_seo_meta_description = $request->contact_seo_meta_description;

         $page_data->update();
         return redirect()->back()->with('success', 'Data is updated successfully!');
    }


}
