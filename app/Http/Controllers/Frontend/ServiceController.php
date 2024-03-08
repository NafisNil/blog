<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
class ServiceController extends Controller
{
    //
    public function index(){

        $service = Service::orderBy('item_order','asc')->get();
        return view('frontend.services', compact('service'));
    }
}
