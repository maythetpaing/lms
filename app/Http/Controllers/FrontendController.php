<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class FrontendController extends Controller
{
     public function home($value='')
    {
    	return view('frontend.home');
    }
     public function login($value='')
    {
        return view('login');
    }

     public function register($value='')
    {
        return view('register');
    }
    public function about($value=''){
        return view('frontend.about');
    }
     public function contact($value=''){
        return view('frontend.contact');
    }
   public function bookstore($value='')
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
   




        // dd($books);
        // foreach ($books as $value) {
        //     $book_piv=$value;
        // }
        // dd($book_piv);
        return view('frontend.bookstore',compact('books','book_count'));
    }
}
