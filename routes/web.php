<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/login/admin', 'App\Http\Controllers\Auth\LoginController@showAdminLoginForm')->name('login.admin');
Route::get('/login/writer', 'App\Http\Controllers\Auth\LoginController@showWriterLoginForm');
Route::get('/register/admin', 'App\Http\Controllers\Auth\RegisterController@showAdminRegisterForm');
Route::get('/register/writer', 'App\Http\Controllers\Auth\RegisterController@showWriterRegisterForm');

Route::post('/login/admin', 'App\Http\Controllers\Auth\LoginController@adminLogin');
Route::post('/login/writer', 'App\Http\Controllers\Auth\LoginController@writerLogin');
Route::post('/register/admin', 'App\Http\Controllers\Auth\RegisterController@createAdmin');
Route::post('/register/writer', 'App\Http\Controllers\Auth\RegisterController@createWriter');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::view('/admin', 'admin');
Route::view('/writer', 'writer');
