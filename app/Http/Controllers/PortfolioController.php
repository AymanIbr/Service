<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios = Portfolio::latest('id')->paginate(4);
        return view('admin.portfolios.index',compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::select(['id','name'])->get();
        return view('admin.portfolios.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:portfolios,name',
            'image'=> 'required',
            'category_id'=>'required'
        ]);

        $ex = $request->file('image')->getClientOriginalExtension();
        $new_image = 'Service .'.'_ '.'image'. rand().$ex;
        $request->file('image')->move(public_path('uplods'),$new_image );
        Portfolio::create([
            'name'=> $request->name,
            'image'=> $new_image ,
            'category_id' => $request->category_id
        ]);
        return redirect()->route('portfolios.index')->with('success','Portfolio Added Seccessfully')
        ->with('type', 'success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::select(['id','name'])->get();
        $portfolio = Portfolio::findOrFail($id);
        return view('admin.portfolios.edit',compact('categories','portfolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|unique:portfolios,name',
            'image'=> 'required',
            'category_id'=>'required'
        ]);
        $portfolio = Portfolio::findOrFail($id);
        $new_image = $portfolio->image;
        if($request->has('image')){
            $ex = $request->file('image')->getClientOriginalExtension();
            $new_image = 'Service .'.'_ '.'image'. rand().$ex;
            $request->file('image')->move(public_path('uplods'),$new_image);
        }
        Portfolio::findOrFail($id)->update([
            'name'=>$request->name,
            'image'=>$new_image ,
            'category_id'=>$request->category_id
        ]);
        return redirect()->route('portfolios.index')->with('success','Portfolio Updated Successfully')
        ->with('type','success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Portfolio::findOrFail($id)->delete();
        return redirect()->route('portfolios.index')->with('success','Portfolio Deleted Successfuly')
        ->with('type','danger');
    }
}
