<?php

use App\Http\Controllers\CarsController;

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
	$name = "Maria";
	$age = 29;
    return view('welcome', compact('name', 'age'));
});


Route::get('about', function(){
	return view('aboutUs');
});

Route::get('/cars', ['as' => 'all-cars', 'uses' => 'CarsController@index']);

Route::get('/car/{id}', ['as' => 'single-car', 'uses' => 'CarsController@show']);