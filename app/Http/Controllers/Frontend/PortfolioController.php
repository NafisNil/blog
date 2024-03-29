<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\PageItem;
use App\Models\PortfolioCategory;
use App\Models\PortfolioPhoto;
use App\Models\PortfolioVideo;
class PortfolioController extends Controller
{
    //
    public function index(){

        $portfolio = Portfolio::orderBy('id','asc')->get();
        $portfolio_categories = PortfolioCategory::orderBy('id', 'desc')->get();
        $page_data = PageItem::where('id',1)->first();
        return view('frontend.portfolios', compact('portfolio','page_data','portfolio_categories'));
    }

    public function detail($slug){
        $portfolio = Portfolio::orderBy('id','asc')->get();
        $portfolio_detail = Portfolio::where('slug', $slug)->first();
        $portfolio_photos = PortfolioPhoto::where('portfolio_id', $portfolio_detail->id)->get();
        $portfolio_videos = PortfolioVideo::where('portfolio_id', $portfolio_detail->id)->get();
        return view('frontend.portfolio_detail', compact('portfolio_detail', 'portfolio','portfolio_photos', 'portfolio_videos'));
    }
}
