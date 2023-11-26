<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

//Route::get('/', 'App\Http\Controllers\UserController@index');//function () {
    //return view('welcome');
//});

//Route::get('pacienti',[UserController::class,'index']);

//Route::get('/loginpacient', [App\Http\Controllers\UserController::class, 'loginp']);
//Route::get('/registerpacient', [App\Http\Controllers\UserController::class, 'registerp']);

Route::get('/', 'App\Http\Controllers\UserController@index');

Route::get('index', 'App\Http\Controllers\UserController@index')->name('index');
Route::get('registerpacient', 'App\Http\Controllers\UserController@registerp')->name('registerpacient');
Route::get('loginpacient', 'App\Http\Controllers\UserController@loginp')->name('loginpacient');
Route::get('loginlekar', 'App\Http\Controllers\UserController@loginl')->name('loginlekar');
Route::get('registerlekar', 'App\Http\Controllers\UserController@registerl')->name('registerlekar');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
