<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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
Route::get('/test',function(){
	return view('test');
});

Route::get('/test/test1','App\Http\Controllers\TestController@test1');
//↑はrepositoryまでのルート

Route::get('/test/test3','App\Http\Controllers\TestController@test3');

Route::get('/test/test4','App\Http\Controllers\TestController@test4');

Route::get('/test/test5','App\Http\Controllers\TestController@test5');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('users', 'App\Http\Controllers\UserController');
