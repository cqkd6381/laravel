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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['domain' => '{language}.laravel-local.com'], function () {
    Route::get('/', function ($language) {
    	App::setLocale($language);
        echo view('welcome')->with("msg",$language);
    });

});
	Route::get('home', 'HomeController@index')->name('home');
	Auth::routes();

