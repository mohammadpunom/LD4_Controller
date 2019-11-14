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

Route::get('/', 'pageController@index');

// Very basic controller
Route::get('/ikea','simpleController@mover');

// pages controller using layout blade template for bula software
Route::get('/stud', 'pageController@student');
Route::get('/teac', 'pageController@teacher');
Route::get('/gard', 'pageController@gardian');
Route::get('/pada', 'pageController@padagog');