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

// Route::group(['domain' => '{language}.laravel-local.com'], function () {

// });
Route::get('/', function () {
	
    return view('welcome');
});

Route::get('home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('users/{user}', function (App\User $user) {
	dump(Route::current());
    dd($user);
});

Route::get('/foo', function () {
    $exitCode = Artisan::call('make:controller', [
        'user' => 'DdController'
    ]);
    return $exitCode;
});

Route::get('/bar', function () {
    $exitCode = Artisan::call('email:send', [
        'user' => 1
    ]);
    return $exitCode;
});