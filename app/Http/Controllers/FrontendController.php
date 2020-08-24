<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
     public function home($value='')
    {
    	return view('frontend.home');
    }
    public function detail($value='')
    {
        return view('frontend.detail');
    }
    public function login($value=''){
    	return view('frontend.login');
	}
	 public function register($value=''){
    	return view('frontend.register');
	}
    public function about($value=''){
        return view('frontend.about');
    }
     public function contact($value=''){
        return view('frontend.contact');
    }
}
