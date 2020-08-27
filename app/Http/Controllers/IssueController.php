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
        // foreach ($books as $value) {
        //     $book_piv=$value;
        // }
        // dd($book_piv);
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
        $book_str='';
        foreach ($books as $book) {   
            foreach ($book->members as $value) {
                if ($value->pivot->status==0) {
                
                    $book_str.=$value->pivot->book_id.",";
                }
            }
        }
        // echo $book_str;
        $arr=explode(',', $book_str);
        $book_count = array_count_values($arr);
        // return $book_count;

// 
        // to retrieve data from category
        $members=Member::all();
        return view('backend.issues.create',compact('books','members','book_count'));
        
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

        foreach ($book_id as $value) {
            $member->books()->attach($value,['issue_date'=>$issue_date,'due_date'=>$due_date,'status'=>$status,'fee'=>$fee]);
            
             // $bookall =Book::find($book_id);
            // $books=Book::all();
            // foreach ($books as $value) {
            // $book_piv=$value->books;
                
            // }
            //  dd($book_piv);
           // dd($bookall[0]->noc);
             // $noc=$bookall[0]->noc;
             // dd($noc);
             // $dnoc=$noc-1;
             // dd($dnoc);
             // $dnoc->$bookall->$member;
            
        }

        return redirect()->route('issues.index');

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
         // $member = Member::find($id);
        // dd($member);
        // return view('backend.issues.show',compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $member=Member::find($id);
        // to retrieve data from subcategory
        $book=Book::find($id);
        // dd($book);
        return view('backend.issues.edit',compact('member','book'));

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
         // dd($request);
        // $members=Member::all();
         $b_id=$request->book_id;
         $due_date=$request->due_date;
         $issue_date=$request->issue_date;
         $fee=$request->fee;

         // dd($issue_date);


         $member_id=Member::find($id);
         $book_id=Book::find($b_id);
         // dd($book_id);
         $member_id->books()->detach($book_id);

         
        // $fee=0;

         $member_id->books()->attach($book_id,['issue_date'=>$issue_date,'due_date'=>$due_date,'status'=>1,'fee'=>$fee]);
       
        //redirect
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

    }
}
