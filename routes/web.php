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
    return view('welcome');
});

Auth::routes();

//  here is the implementation of middleware auth, meaning that all the routes inside this middleware clause can't be accessed withut user login
Route::middleware(['auth'])->group(function () {

	Route::get('/', function() {
		return redirect()->route('task.index');
	});

	Route::resource('task', 'TaskController')->names('task');

});