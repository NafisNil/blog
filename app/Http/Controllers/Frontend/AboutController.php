<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PageItem;
class AboutController extends Controller
{
    //
    public function index(){
        $page_data = PageItem::where('id', 1)->first();
        return view('frontend.about', compact('page_data'));
    }
}
