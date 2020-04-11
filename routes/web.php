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

Route::get('/', 'PagesController@index')->name('index');
Route::get('resume', 'PagesController@resume')->name('resume');
Route::get('contact', 'ContactFormController@create')->name('contact-me');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
