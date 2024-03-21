<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use Illuminate\Support\Str;
use App\Models\PortfolioPhoto;

class AdminPortfolioController extends Controller
{
    //
    public function index(){
        $all_data = Portfolio::with('rPortfolioCategory')->orderBy('id', 'desc')->get();
        return view('admin.portfolio_show', compact('all_data'));
    }

    public function add(){
        $portfolio_categories = PortfolioCategory::get();
        return view('admin.portfolio_add', compact('portfolio_categories'));
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
 
            'description' => 'required',
     

            'photo' => 'required|image|mimes:jpg,png,jpeg,webp,gif',
            'banner' => 'required|image|mimes:jpg,png,jpeg,webp,gif',
         ]);

         $obj = new Portfolio();

         $ext = $request->file('photo')->extension();
         $final_name = 'portfolio_photo_'.time().'.'.$ext;
         $request->file('photo')->move(public_path('uploads/'), $final_name);
         $obj->photo = $final_name;

         $ext1 = $request->file('banner')->extension();
         $final_name1= 'portfolio_banner_'.time().'.'.$ext1;
         $request->file('banner')->move(public_path('uploads/'), $final_name1);
         $obj->banner = $final_name1;

         $obj->name = $request->name;
         $obj->slug  =Str::slug($request->name);
   
         $obj->description = $request->description;
         $obj->project_client = $request->project_client;
         $obj->portfolio_category_id = $request->portfolio_category_id;
         $obj->project_company = $request->project_company;
         $obj->project_cost = $request->project_cost;
         $obj->project_website = $request->project_website;
         $obj->project_start_date = $request->project_start_date;
         $obj->project_end_date = $request->project_end_date;

         $obj->seo_title = $request->seo_title;
         $obj->seo_meta_description = $request->seo_meta_description;
         $obj->save();
         return redirect()->route('admin_portfolio_show')->with('success', 'Data is inserted successfully!');
    }

    public function edit($id){
        $portfolio_categories = PortfolioCategory::get();
        $row_data = Portfolio::where('id', $id)->first();
        return view('admin.portfolio_edit', compact('row_data', 'portfolio_categories'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required',
          
            'description' => 'required',
         
          
         ]);
         $obj = Portfolio::where('id',$id)->first();

         if ($request->hasFile('photo')) {
            # code...
           
            $request->validate([
                'photo' => 'image|mimes:jpg,png,jpeg,webp,gif',
             ]);
            
             $ext = $request->file('photo')->extension();
             
             $final_name = 'portfolio_photo_'.time().'.'.$ext;
             
             $request->file('photo')->move(public_path('uploads/'), $final_name);
           //  dd($final_name);
             $obj->photo = $final_name;
         }


         if ($request->hasFile('banner')) {
            # code...
           
            $request->validate([
                'photo' => 'image|mimes:jpg,png,jpeg,webp,gif',
             ]);
            
             $ext = $request->file('photo')->extension();
             
             $final_name = 'portfolio_banner_'.time().'.'.$ext;
             
             $request->file('photo')->move(public_path('uploads/'), $final_name);
           //  dd($final_name);
             $obj->banner = $final_name;
         }


       
         $obj->name = $request->name;
         $obj->slug  =Str::slug($request->name);
   
         $obj->description = $request->description;
         $obj->project_client = $request->project_client;
         $obj->portfolio_category_id = $request->portfolio_category_id;
         $obj->project_company = $request->project_company;
         $obj->project_cost = $request->project_cost;
         $obj->project_website = $request->project_website;
         $obj->project_start_date = $request->project_start_date;
         $obj->project_end_date = $request->project_end_date;

         $obj->seo_title = $request->seo_title;
         $obj->seo_meta_description = $request->seo_meta_description;
        
         $obj->update();
         return redirect()->route('admin_portfolio_show')->with('success', 'Data is inserted successfully!');
    }

    public function delete($id){
        $obj = Portfolio::where('id',$id)->first();
        unlink(public_path('uploads/'.$obj->photo));
        $obj->delete();
        return redirect()->route('admin_portfolio_show')->with('success', 'Data is deleted successfully!');
    }

    public function photo_gallery($id){
        $single_portfolio = Portfolio::where('id', $id)->first();
        $photo_gallery_items = PortfolioPhoto::where('portfolio_id', $id)->get();
        return view('admin.portfolio_photo_gallery_show', compact('photo_gallery_items', 'single_portfolio'));
    }

    public function photo_gallery_submit(Request $request){
        $request->validate([
           
            'photo' => 'required|image|mimes:jpg,png,jpeg,webp,gif',
          
         ]);

         $obj = new PortfolioPhoto();

         $ext = $request->file('photo')->extension();
         $final_name = 'portfolio_gallery_photo_'.time().'.'.$ext;
         $request->file('photo')->move(public_path('uploads/'), $final_name);
         $obj->photo = $final_name;

        

         $obj->portfolio_id = $request->portfolio_id;
        

         $obj->save();
         return redirect()->back()->with('success', 'Data is inserted successfully!');
    }


    public function portfolio_gallery_delete($id){
        $obj = PortfolioPhoto::where('id',$id)->first();
        $obj->delete();
        return redirect()->route('admin_portfolio_show')->with('success', 'Data is deleted successfully!');
    }

}
