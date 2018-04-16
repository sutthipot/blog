<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('login','LoginsController@login');
//Route::get('login','LoginsController@login');
Route::get('garageregisters/admin/list/{statusid}', 'GarageregisterController@admin_list');
Route::post('garageregisters/admin/edit/{id}', 'GarageregisterController@admin_edit');
Route::get('garageregisters/admin/update_status/{id}/{statusid}', 'GarageregisterController@admin_edit_re');

//------------------------------------------------//

Route::get('products', 'ProductsController@index');

Route::get('products/{product}', 'ProductsController@show');

Route::post('products','ProductsController@store');

Route::put('products/{product}','ProductsController@update');

Route::delete('products/{product}', 'ProductsController@delete');