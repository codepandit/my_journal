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

Route::get('/', 'JournalController@index');
Route::get('/about', 'JournalController@about');
Route::get('/journal', 'JournalController@journal');
Route::get('/pricing', 'JournalController@pricing');

Route::resource('posts', 'PostsController')->middleware('auth'); 
// ->middleware('auth')

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
