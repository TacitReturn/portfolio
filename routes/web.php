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

// PagesController Routes
Route::get('/', 'PagesController@index')->name('index');
Route::get('projects', 'PagesController@projects')->name('projects');
Route::get('resume', 'PagesController@resume')->name('resume');
Route::get('contact', 'ContactFormController@create')->name('contact-me');
Route::post('contact', 'ContactFormController@store')->name('contact-me');

// PostsController Routes

Route::resource('posts', 'PostsController');

// AuthController Routes
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
