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
    return view('home');
});
Route::get('/quiz1', 'Quiz1@index');
Route::post('/quiz1', 'Quiz1@swap');
Route::get('/quiz2', 'Quiz2@index');