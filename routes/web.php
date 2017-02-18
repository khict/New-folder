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
    return view('home');
});
Route::get('/menu', function () {
	return view('menu.menu');
});
Route::get('create', function () {
	return view('menu.create');
});
//Auth::routes();

//Route::get('/home', 'HomeController@index');
Route::resource('menu','MenuController');
//position form 
Route::get('position', function(){
	return view('form-input-data.tb_position');
});
