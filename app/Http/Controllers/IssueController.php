<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Issue;
use App\Book;
use App\Member;


class IssueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $issues=Issue::all();
         return view('backend.issues.index',compact('issues'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $books=Book::all();
        // to retrieve data from category
        $members=Member::all();
        return view('backend.issues.create',compact('books','members'));
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
            'member'=>'required',
            'book'=>'required',
            'issue_date'=>'required',
            'due_date'=>'required',
            'status'=>'required',

        ]);
       
        //data insert
        $issue=new Issue;
         // $item->table-column=$request->form input type name;
        $issue->book_id=$request->book;
        $issue->member_id=$request->member;
        $issue->issue_date=$request->issue_date;
        $issue->due_date=$request->due_date;
        $issue->status=$request->status;
     
        $issue->save(); 
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
        //
    }
}
