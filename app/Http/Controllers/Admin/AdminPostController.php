<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Archive;
use App\Models\Comment;
use App\Models\Reply;
use App\Models\PostCategory;
use Illuminate\Support\Str;

class AdminPostController extends Controller
{
    //
    public function index(){
        $all_data = Post::with('rPostCategory')->orderBy('id', 'desc')->get();
        return view('admin.post_show', compact('all_data'));
    }

    public function add(){
        $post_categories = PostCategory::get();
        return view('admin.post_add', compact('post_categories'));
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
 
            'description' => 'required',
            'short_description' => 'required',

            'photo' => 'required|image|mimes:jpg,png,jpeg,webp,gif',
            'banner' => 'required|image|mimes:jpg,png,jpeg,webp,gif',
         ]);

         $obj = new Post();

         $ext = $request->file('photo')->extension();
         $final_name = 'post_photo_'.time().'.'.$ext;
         $request->file('photo')->move(public_path('uploads/'), $final_name);
         $obj->photo = $final_name;

         $ext1 = $request->file('banner')->extension();
         $final_name1= 'post_banner_'.time().'.'.$ext1;
         $request->file('banner')->move(public_path('uploads/'), $final_name1);
         $obj->banner = $final_name1;

         $obj->title = $request->title;
         $obj->slug  =Str::slug($request->title);
   
         $obj->description = $request->description;
         $obj->short_description = $request->short_description;

         $obj->post_category_id = $request->post_category_id;
         $obj->show_comment = $request->show_comment;

         $obj->seo_title = $request->seo_title;
         $obj->seo_meta_description = $request->seo_meta_description;
         $obj->save();

         $current_month  = date('m');
         $current_year  = date('Y');
         $total = Archive::where('month', $current_month)->where('year', $current_year)->count();

         if ($total > 0) {
            # code...
            $archive_data = Archive::where('month', $current_month)->where('year', $current_year)->first();
            $total_post = $archive_data->total_post;
            $total_post++;
            $archive_data->total_post = $total_post;
            $archive_data->update();
         }else{
            $archive_data = new Archive();
            $archive_data->month =  $current_month;
            $archive_data->year =  $current_year;
            $archive_data->total_post = 1;
         }
         $archive_data->save();



         return redirect()->route('admin_post_show')->with('success', 'Data is inserted successfully!');
    }

    public function edit($id){
        $post_categories = PostCategory::get();
        $row_data = Post::where('id', $id)->first();
        return view('admin.post_edit', compact('row_data', 'post_categories'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'title' => 'required',
            'short_description' => 'required',
            'description' => 'required',
         
          
         ]);
         $obj = Post::where('id',$id)->first();

         if ($request->hasFile('photo')) {
            # code...
           
            $request->validate([
                'photo' => 'image|mimes:jpg,png,jpeg,webp,gif',
             ]);
            
             $ext = $request->file('photo')->extension();
             
             $final_name = 'post_photo_'.time().'.'.$ext;
             
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
             
             $final_name = 'post_banner_'.time().'.'.$ext;
             
             $request->file('photo')->move(public_path('uploads/'), $final_name);
           //  dd($final_name);
             $obj->banner = $final_name;
         }


       
         $obj->title = $request->title;
         $obj->slug  =Str::slug($request->title);
   
         $obj->description = $request->description;
         $obj->short_description = $request->short_description;
         $obj->post_category_id = $request->post_category_id;
       
         $obj->seo_title = $request->seo_title;
         $obj->seo_meta_description = $request->seo_meta_description;
        
         $obj->update();
         return redirect()->route('admin_post_show')->with('success', 'Data is inserted successfully!');
    }

    public function delete($id){
        $obj = Post::where('id',$id)->first();
        $current_month  = $obj->created_at->format('m');
        $current_year  =  $obj->created_at->format('Y');

        
        unlink(public_path('uploads/'.$obj->photo));
        $obj->delete();

        $archive_data = Archive::where('month', $current_month)->where('year', $current_year)->first();
            $total_post = $archive_data->total_post;
            $total_post--;
            $archive_data->total_post = $total_post;
            $archive_data->update();

        return redirect()->route('admin_post_show')->with('success', 'Data is deleted successfully!');
    }


    public function comment_pending(){
        $pending_comment = Comment::with('rPost')->where('status', 0)->get();
        return view('admin.comment_pending', compact('pending_comment'));
    }


    public function comment_make_approved($id){
        $obj = Comment::where('id',$id)->first();
       $obj->status = 1;
        $obj->delete();

        return redirect()->back()->with('success', 'Comment is approved successfully!');
    }

    public function comment_delete($id){
        $obj = Comment::where('id',$id)->first();
       
        $obj->delete();

        return redirect()->back()->with('success', 'Data is deleted successfully!');
    }



}
