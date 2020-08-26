<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
       
         $members=Member::all();
         // dd($members[0]->books[0]->pivot->due_date);
        return view('backend.issues.index',compact('members'));
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

         
        $id=$request->member;

        $member = Member::find($id);

        // dd($member);
        $member_id=$request->member;
        $book_id=$request->books;
        $due_date=$request->due_date;
        $issue_date=$request->issuedate;
        $fee=0;
        $status=0;

        // dd($book_id);

        // //save into issue_detail

        // foreach ($request as $row) {
        //    $member->books()->attach($book_id,['due_date'=>$row->due_date],['status'=>$row->status],['fee'=>$row->fee]);
        // }
        foreach ($book_id as $value) {
            $member->books()->attach($value,['issue_date'=>$issue_date,'due_date'=>$due_date,'status'=>$status,'fee'=>$fee]);
            
        }

        return view('backend.issues.show');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     function show($id)
    {   
        // dd($id);
         $member = Member::find($id);
        // dd($member);
        return view('backend.issues.show',compact('member'));

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

        //  $request->validate([
        //     'member'=>'required',
        //     'book'=>'required',
        //     'issue_date'=>'required',
        //     'due_date'=>'required',
        //     'fee'=>'required',
        //     // 'status'=>'required',

        // ]);

        //  //data insert
        // $issue=Issue::find($id);
        //  // $item->table-column=$request->form input type name;
        // $issue->member_id=$request->member;
        // $issue->book_id=$request->book;
        // $issue->issue_date=$request->issue_date;
        // $issue->due_date=$request->due_date;
        // $issue->fee=$request->fee;
        // // $issue->status=$request->status;
     
        // $issue->save(); 
        //  return redirect()->route('issues.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    
    {
        // $issue=Issue::find($id);
        // $issue->delete();
        // //redirect
        // return redirect()->route('issue.index');

    }
}
