<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Year;

class YearController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $years=Year::all();
         return view('backend.years.index',compact('years'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.years.create');
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
            
            'name'=>'required',
           
            


        ]);
        
        //data insert
        $year=new Year;
         // $item->table-column=$request->form input type name;
        
        $year->name=$request->name;
        
        
        $year->save();
        //redirect
        return redirect()->route('years.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
           $year =Year::find($id);
        return view('backend.years.edit',compact('year'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            
            'name'=>'required',

        ]);
        //if include file,upload
         
        //data insert
        $year=Year::find($id);
         // $item->table-column=$request->form input type name;author
        
        $year->name=$request->name;
       
        $year->save();
        //redirect
        return redirect()->route('years.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $year=Year::find($id);
        $year->delete();
        //redirect
        return redirect()->route('years.index');
    }
}
