<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;


class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authors=Author::all();
         return view('backend.authors.index',compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.authors.create');
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
        $author=new Author;
         // $item->table-column=$request->form input type name;
        
        $author->name=$request->name;
        
        
        $author->save();
        //redirect
        return redirect()->route('authors.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return view('backend.authors.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $author =Author::find($id);
        return view('backend.authors.edit',compact('author'));
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
        $author=Author::find($id);
         // $item->table-column=$request->form input type name;author
        
        $author->name=$request->name;
       
        $author->save();
        //redirect
        return redirect()->route('authors.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $author=Author::find($id);
        $author->delete();
        //redirect
        return redirect()->route('authors.index');
    }
}
