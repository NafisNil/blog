<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
class AdminPortfolioController extends Controller
{
    //
    public function index(){
        $all_data = Portfolio::orderBy('id', 'desc')->get();
        return view('admin.portfolio_show', compact('all_data'));
    }

    public function add(){
        return view('admin.portfolio_add');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'icon' => 'required',
            'item_order' => 'required',
            'photo' => 'required|image|mimes:jpg,png,jpeg,webp,gif',
            'banner' => 'required|image|mimes:jpg,png,jpeg,webp,gif',
         ]);

         $obj = new Portfolio();

         $ext = $request->file('photo')->extension();
         $final_name = 'service_photo_'.time().'.'.$ext;
         $request->file('photo')->move(public_path('uploads/'), $final_name);
         $obj->photo = $final_name;

         $ext1 = $request->file('banner')->extension();
         $final_name1= 'service_banner_'.time().'.'.$ext1;
         $request->file('banner')->move(public_path('uploads/'), $final_name1);
         $obj->banner = $final_name1;

         $obj->name = $request->name;
         $obj->slug  =Str::slug($request->name);
         $obj->short_description = $request->short_description;
         $obj->description = $request->description;
         $obj->icon = $request->icon;
         $obj->item_order = $request->item_order;
         $obj->seo_title = $request->seo_title;
         $obj->seo_meta_description = $request->seo_meta_description;
         $obj->save();
         return redirect()->route('admin_portfolio_show')->with('success', 'Data is inserted successfully!');
    }
}
