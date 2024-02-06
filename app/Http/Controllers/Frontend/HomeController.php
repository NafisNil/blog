<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomePageItem;
use App\Models\Skill;
class HomeController extends Controller
{
    //
    public function index(){
        $page_data = HomePageItem::where('id', 1)->first();
        $left_skill = Skill::where('side', 'Left')->get();
        $right_skill = Skill::where('side', 'Right')->get();
        return view('frontend.home', compact('page_data', 'left_skill', 'right_skill'));
    }
}
