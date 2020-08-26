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
            // 'issue_date'=>'required',
            'due_date'=>'required',
            // 'status'=>'required',

        ]);
       // dd($request);
        //data insert
        $issue=new Issue;
        $issue->book_id=$request->book;
        $issue->member_id=$request->member;
        
        // $issue->issue_date=$request->issue_date;
        $issue->due_date=$request->due_date;
        // $issue->status=$request->status;
     
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
         $issue = Issue::find($id);
        // dd($book);
        return view('backend.issues.show',compact('issue'));

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
        $books=Book::all();
        // to retrieve data from subcategory
        $members=Member::all();
        $issue =Issue::find($id);
        return view('backend.issues.edit',compact('books','members','issue'));

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
            'member'=>'required',
            'book'=>'required',
            'issue_date'=>'required',
            'due_date'=>'required',
            'fee'=>'required',
            // 'status'=>'required',

        ]);

         //data insert
        $issue=Issue::find($id);
         // $item->table-column=$request->form input type name;
        $issue->member_id=$request->member;
        $issue->book_id=$request->book;
        $issue->issue_date=$request->issue_date;
        $issue->due_date=$request->due_date;
        $issue->fee=$request->fee;
        // $issue->status=$request->status;
     
        $issue->save(); 
         return redirect()->route('issues.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    
    {
        $issue=Issue::find($id);
        $issue->delete();
        //redirect
        return redirect()->route('issue.index');

    }
}
