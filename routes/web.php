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



Route::get("/test1","TestController@test1");
Route::get("/test2","TestController@test2");


Route::get('/easa','TestController@easa');
Route::get('/sign1','TestController@sign1');

