<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'MessageController@index')->name('home');
Route::get('/create/{id?}/{subject?}', 'MessageController@create')->name('create');
Route::post('/send', 'MessageController@send')->name('send');
Route::get('/sent', 'MessageController@sent')->name('sent-messages');
Route::get('/read/{id}','MessageController@read')->name('read');
Route::get('/delete/{id}','MessageController@delete')->name('delete');
Route::get('/deleted', 'MessageController@deleted')->name('deleted-messages');
Route::get('/return/{id}', 'MessageController@return')->name('return');