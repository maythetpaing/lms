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


Route::get('/','FrontendController@home')->name('homepage');

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('dashboard','BackendController@dashboard')->name('dashboard');
Route::get('login','FrontendController@login')->name('login');
Route::get('register','FrontendController@register')->name('register');


Route::resource('authors','AuthorController');
Route::resource('categories','CategoryController');
Route::resource('books','BookController');
Route::resource('departments','DepartmentController');
Route::resource('years','YearController');

