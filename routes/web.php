<?php

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

Route::get('/', function () {
    return view('other.comingsoon');
});

Route::get('/about', function(){
    return view('other.about');
});
Route::get('/resources', function(){
    return view('resources.resources');
});

Route::get('/privacy', function(){
    return view('other.privacy');
});


Route::resource('/interviews', 'InterviewController');
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
