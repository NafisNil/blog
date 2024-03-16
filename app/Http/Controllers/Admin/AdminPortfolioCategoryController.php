<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PortfolioCategory;
class AdminPortfolioCategoryController extends Controller
{
    //
    public function index(){
        $all_data = PortfolioCategory::orderBy('id', 'desc')->get();
        return view('admin.portfolio_category_show', compact('all_data'));
    }

    public function add(){
        return view('admin.portfolio_category_add');
    }

    public function store(Request $request){
        $request->validate([
            'category_name' => 'required',
           
         ]);

         $obj = new PortfolioCategory();
         $obj->category_name = $request->category_name;
        
        
         $obj->save();
         return redirect()->route('admin_portfolio_category_show')->with('success', 'Data is inserted successfully!');
    }

    public function edit($id){
        $row_data = PortfolioCategory::where('id', $id)->first();
        return view('admin.portfolio_category_edit', compact('row_data'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'category_name' => 'required',
         
          
         ]);
         $obj = PortfolioCategory::where('id',$id)->first();

        

       
         $obj->category_name = $request->category_name;
        
        
         $obj->update();
         return redirect()->route('admin_portfolio_category_show')->with('success', 'Data is inserted successfully!');
    }

    public function delete($id){
        $obj = PortfolioCategory::where('id',$id)->first();
        $obj->delete();
        return redirect()->route('admin_portfolio_category_show')->with('success', 'Data is deleted successfully!');
    }
}
