<?php

namespace App\Http\Controllers;

use App\Models\General;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $generals = General::latest('id')->paginate(4);
        return view('admin.generals.index',compact('generals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.generals.create');
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
            'title'=>'required',
            'content'=>'required',
            'sturdy' => 'required',
            'up_to_Date' =>'required',
            'ready' => 'required',
            'made' => 'required'
        ]);
        General::create([
            'title'=>$request->title,
            'content'=>$request->content,
            'sturdy' => $request->sturdy,
            'up_to_Date' =>$request->up_to_Date,
            'ready' => $request->ready,
            'made' => $request->made
        ]);
        return redirect()->route('generals.index')->with('success','Servies Added Successfully')
        ->with('type', 'success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\General  $general
     * @return \Illuminate\Http\Response
     */
    public function show(General $general)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\General  $general
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $general = General::findOrFail($id);
        return view('admin.generals.edit',compact('general'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\General  $general
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'=>'required',
            'content'=>'required',
            'sturdy' => 'required',
            'up_to_Date' =>'required',
            'ready' => 'required',
            'made' => 'required'
        ]);
        General::findOrFail($id)->update([
            'title'=>$request->title,
            'content'=>$request->content,
            'sturdy' => $request->sturdy,
            'up_to_Date' =>$request->up_to_Date,
            'ready' => $request->ready,
            'made' => $request->made
        ]);
        return redirect()->route('generals.index')->with('success','Service Update Successfully')
        ->with('type','success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\General  $general
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        general::findOrFail($id)->delete();
        return redirect()->route('generals.index')->with('success','Service Deleted Successfully')
        ->with('type','danger');
    }
}
