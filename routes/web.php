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

// Tagging Controller
// Route::get('/interviews/tags/{tag}', 'TagController@interviewIndex');

Route::get('interviews/by_tags/', 'InterviewController@byTags');
Route::get('posts/by_categories/', 'PostController@byCategories');
Auth::routes();

// Interview Controller 
Route::resource('/interviews', 'InterviewController');
Route::resource('/posts', 'PostController');

Route::get('/tags', 'TagController@index');
Route::get('tags/create', 'TagController@create');
Route::post('tags/', 'TagController@store');

Route::get('/categories', 'CategoryController@index');
Route::get('categories/create', 'CategoryController@create');
Route::post('categories/', 'CategoryController@store');

Route::resource('/resources', 'ResourceController');

// Authentication Routes

Route::get('/home', 'HomeController@index')->name('home');


// Individual Web Pages


Route::get('/', 'InterviewController@featured');


// Route::get('/', function () {
//     return view('other.comingsoon');
// });

Route::get('/contribute', function(){
    return view('other.contribute');
});

Route::get('/about', function(){
    return view('other.about');
});

Route::get('/faq', function(){
    return view('other.faq');
});



Route::get('/privacy', function(){
    return view('other.privacy');
});
