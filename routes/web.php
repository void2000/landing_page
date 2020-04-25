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

Route::get('/', 'backend\BackendController@master');

//template
Route::get('template/{id}', 'backend\BackendController@template');

// add template
Route::get('add-template', 'backend\BackendController@add_template');
