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

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');
Route::resource('customer', 'CustomerController');
Route::get('todo', 'ApiController@getAllCustomers');
Route::get('deposits', 'depositController@getDeposits');
Route::get('info', 'ApiController@info');
Route::resource('bill', 'billController');

Route::post('bill/{id}', 'billController@store');
Route::resource('deposit', 'depositController');