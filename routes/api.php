<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//User Routes
Route::post('register', 'UserController@register');
Route::post('login', 'UserController@login');

//Route::apiResource('products', 'ProductController');

//GET
Route::get('products', 'ProductController@index');
Route::get('products/{id}', 'ProductController@show');

Route::get('categories', 'CategoryController@index');
Route::get('categories/{id}', 'CategoryController@show');

//POST, UPDATE and DELETE
Route::group(['middleware' => 'auth:api'], function(){
    Route::post('products', 'ProductController@store');
    Route::put('products/{id}', 'ProductController@update');
    Route::delete('products/{id}', 'ProductController@destroy');
});
