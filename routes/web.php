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
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', 'LoginController@index')->name('login');
Route::get('login/{id}', 'LoginController@indexbyid');
Route::get('home', 'HomeController@index')->name('home');

//-------------------------------------//
Route::get('go/{i}', function($i){
	return '=> '.$i;
});

Route::redirect('res', 'there', 301);

Route::view('/welcome', 'welcome', ['name' => 'Taylor']);

Route::domain('{account}.blog.test')->group(function () {
    Route::get('user/{id}', function ($account, $id) {
        return $account.' / '.$id;
    });
});

Route::get('user/{id}', 'UserController@show');
