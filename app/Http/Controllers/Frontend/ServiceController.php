<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\PageItem;
class ServiceController extends Controller
{
    //
    public function index(){

        $service = Service::orderBy('item_order','asc')->get();
        $page_data = PageItem::where('id',1)->first();
        return view('frontend.services', compact('service','page_data'));
    }

    public function detail($slug){
        $service = Service::orderBy('item_order','asc')->get();
        $service_detail = Service::where('slug', $slug)->first();
        return view('frontend.service_detail', compact('service_detail', 'service'));
    }
}
