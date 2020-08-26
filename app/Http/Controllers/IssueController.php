<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Member;
use App\Issue;

class IssueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books=Book::all();
         $members=Member::all();
         $issues=Issue::all();
        return view('backend.issues.index',compact('books','members','issues'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $members=Member::all();
        // to retrieve data from category
        $books=Book::all();
        return view('backend.issues.create',compact('members','books'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
          $request->validate([
            'member'=>'required',
            'book'=>'required',
            'due_date'=>'required',


        ]);
        $issue=new Issue;
         // $item->table-column=$request->form input type name;
        $issue->member_id=$request->member;
        $issue->book_id=$request->book;
        $issue->due_date=$request->due_date;
        $issue->save();
        // dd($issue);
        //redirect
        return redirect()->route('issues.index');

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $issue =Issue::find($id);
        $issue->delete();
        // redirect
        return redirect()->route('issues.index');
    }
}
