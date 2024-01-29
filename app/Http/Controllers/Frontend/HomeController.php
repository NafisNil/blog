<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomePageItem;
class HomeController extends Controller
{
    //
    public function index(){
        $page_data = HomePageItem::where('id', 1)->first();
        return view('frontend.home', compact('page_data'));
    }
}
