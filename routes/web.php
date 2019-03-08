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


// Jika admin bisa akses halaman
Route::get('/admin', function(){
	echo 'oh hello admin';
})->middleware(['auth', 'role:admin']);

// Jika user atau admin bisa akses halaman
Route::get('/user', function(){
	echo 'oh hello user';
})->middleware(['auth', 'role:user|admin']);


Route::get('/role', function(){
	return view('role');
})->middleware(['auth']);


Route::get('/home', 'HomeController@index')->name('home');
