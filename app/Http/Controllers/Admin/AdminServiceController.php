<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
class AdminServiceController extends Controller
{
    //
    public function index(){
        $all_data = Service::orderBy('item_order', 'desc')->get();
        return view('admin.service_show', compact('all_data'));
    }

    public function add(){
        return view('admin.service_add');
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

         $obj = new Service();

         $ext = $request->file('photo')->extension();
         $final_name = 'testimonial_'.time().'.'.$ext;
         $request->file('photo')->move(public_path('uploads/'), $final_name);
         $obj->photo = $final_name;

         $obj->name = $request->name;
         $obj->designation = $request->designation;
         $obj->comment = $request->comment;
        
         $obj->save();
         return redirect()->route('admin_service_show')->with('success', 'Data is inserted successfully!');
    }
}
