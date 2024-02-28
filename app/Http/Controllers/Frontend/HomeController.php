<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomePageItem;
use App\Models\Skill;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Testimonial;
use App\Models\Client;
class HomeController extends Controller
{
    //
    public function index(){
        $page_data = HomePageItem::where('id', 1)->first();
        $left_skill = Skill::where('side', 'Left')->get();
        $right_skill = Skill::where('side', 'Right')->get();
        $education = Education::orderBy('item_order')->get();
        $experience = Experience::orderBy('item_order')->get();
        $testimonial = Testimonial::orderBy('id','asc')->get();
        $client = Client::orderBy('id','asc')->get();
        return view('frontend.home', compact('page_data', 'left_skill', 'right_skill','education','experience', 'testimonial'));
    }
}
