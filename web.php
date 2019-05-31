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
    return view('user');
});
Route::get('create',function(){
	return view('create');
});

Route::get('castvote',function(){
	return view('castvote');
	
});
Route::get('calculate',function(){
	return view('calculate');
	
});

Route::get('gvote',function(){
	return view('gvote');
	
});

Route::get('PPP',function(){
	return view('PPP');
});
Route::get('hash',function(){
	return view('hash');
});
Route::post('/logs', 'CastVoteController@logs');

Route::get('add',function(){
	return view('add');
	
});
Route::get('done',function(){
	return view('done');
	
});
Route::get('home',function(){
	return view('home');
	
});


Route::get('create',['uses' => 'UserController@create']);

Route::post('user',['uses' => 'UserController@store']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
