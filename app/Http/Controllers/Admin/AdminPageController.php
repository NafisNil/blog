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



}
