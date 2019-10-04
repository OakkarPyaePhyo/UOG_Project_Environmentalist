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

Route::resource('admins','AdminController');
Route::resource('items','ItemController');
Route::resource('events','EventController');
Route::resource('abouts','AboutController');
Route::resource('accounts','AccountController');
Route::resource('contacts','ContactController');
Route::resource('contacts','ContactController');
Route::resource('volunteers','VolunteerController');

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
