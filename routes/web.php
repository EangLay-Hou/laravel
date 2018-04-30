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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PostController@index')->name('home');

Route::get('/add_post', 'PostController@showFormAddNew')->name('add_new');

Route::post('/add_post', 'PostController@store')->name('submit_add_new');

Route::get('/edit_post/{id}', 'PostController@showFormEditPost')->name('edit_post');

Route::post('/edit_post', 'PostController@update')->name('submit_edit_post');