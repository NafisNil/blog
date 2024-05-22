<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Settings;

class AdminAdminSettingController extends Controller
{
    //
    public function index(){
        $setting_data = Setting::where('id', 1)->first();
        return view('admin.setting', compact('all_data'));
    }
}
