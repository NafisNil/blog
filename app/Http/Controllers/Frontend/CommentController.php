<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Reply;
use App\Models\Post;
use Auth;
class CommentController extends Controller
{
    //
    public function comment_submit(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'comment' => 'required',
         ]);

         $obj = new Comment;
         $obj->post_id = $request->post_id;
         $obj->person_name = $request->name;
         $obj->person_email = $request->email;
         $obj->person_comment = $request->comment;
         $obj->person_type = "Visitor";
         $obj->status = '0';
         $obj->save();
         return redirect()->back()->with('success', 'Thank you for your comment ! Admin will check it soon!');
    }


    public function reply_submit(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'comment' => 'required',
         ]);

         $obj = new Reply;
         $obj->post_id = $request->post_id;
         $obj->comment_id = $request->comment_id;
         $obj->person_name = $request->name;
         $obj->person_email = $request->email;
         $obj->person_comment = $request->comment;
        
         if (Auth::check()) {
            # code...
         
            $obj->person_type = "Admin";
         }else{
     
            $obj->person_type = "Visitor";
         }
         
         $obj->status = '0';
         $obj->save();
         return redirect()->back()->with('success', 'Thank you for your reply ! Admin will check it soon!');
    }
}
