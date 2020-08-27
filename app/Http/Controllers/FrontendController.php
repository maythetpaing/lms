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
        // dd($items);
        return view('frontend.bookstore',compact('books'));
    }
}
