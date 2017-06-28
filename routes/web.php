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

Route::group(['domain' => '{language}.laravel.dev','middleware' => ['changeLanguage']], function () {
	Route::get('/', function () {
		// App::setLocale($language);
		return view('welcome');
	});


	Route::get('users/{user}', function (App\User $user) {
		dump(Route::current());
	    dd($user);
	});

	Route::get('/bar', function () {
	    $exitCode = Artisan::call('email:send', [
	        'user' => 1,
	        '--field' => 'name'
	    ]);
	    return $exitCode;
	});
});
Route::get('home', 'HomeController@index')->name('home');
Auth::routes();


