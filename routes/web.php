<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Frontend
Route::get('/','FrontendController@home')->name('homepage');

Route::get('detail','FrontendController@detail')->name('detail');

Route::get('detail/{id}','FrontendController@detail')->name('detail');

Route::get('about','FrontendController@about')->name('about');
Route::get('contact','FrontendController@contact')->name('contact');
Route::get('bookstore','FrontendController@bookstore')->name('bookstore');


// Backend---------

Route::middleware('role:admin')->group(function () {

Route::get('dashboard','BackendController@dashboard')->name('dashboard');
Route::resource('authors','AuthorController');
Route::resource('categories','CategoryController');
Route::resource('books','BookController');
Route::resource('issues','IssueController');

Route::resource('members','MemberController');

});	
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('login','FrontendController@login')->name('login');

Route::get('register','FrontendController@register')->name('register');

