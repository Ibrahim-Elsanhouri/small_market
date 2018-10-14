<?php



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::post('login/custome', 'LoginController@login');

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');;
Route::get('/home', 'ProductController@index')->middleware('auth');;
Route::get('/addpro', 'ProductController@store')->middleware('auth');;
Route::post('/addpro', 'ProductController@store')->middleware('auth');;
Route::get('/product/{id}', 'ProductController@show')->middleware('auth');;
Route::post('/product/{id}', 'ReviewController@store')->middleware('auth');;