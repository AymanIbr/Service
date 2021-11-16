<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\General;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class pagescontroller extends Controller
{
    public function index(){
        return view('Front.index');
    }
    public function about(){
        $generals = General::select(['title','content'])->get();
        return view('Front.about',compact('generals'));
    }
    public function contact(){
        return view('Front.contact');
    }
    public function contactSubmit(Request $request){
        $request->validate([
            'name'=>'required',
            'email' => 'required',
            'phone' => 'required',
            'message'=> 'required'
        ]);
        Mail::to("admin@admin.com")->send(new ContactMail($request->except('_token')));
        return view('Front.index');
    }
    public function portfolio(){
        $portfolios = Portfolio::all();
        return view('Front.portfolio',compact('portfolios'));
    }
    public function service(){
        $generals = General::select(['sturdy','up_to_Date','ready','made'])->get();
        return view('Front.service',compact('generals'));
    }

}
