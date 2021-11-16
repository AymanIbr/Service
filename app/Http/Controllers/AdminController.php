<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){

        $Category_Count = Category::count();
        $Portfolio_Count = Portfolio::count();
        return view('admin.index',compact('Category_Count','Portfolio_Count'));
    }
}
