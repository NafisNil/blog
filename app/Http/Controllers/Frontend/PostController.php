<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\PageItem;
class PostController extends Controller
{
    //
    public function index(){

        $posts = Post::orderBy('id','desc')->paginate(9);
        $page_data = PageItem::where('id',1)->first();
        return view('frontend.posts', compact('posts','page_data'));
    }
}
