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

Route::get('/', 'StaticPagesController@index')->name('home');
Route::get('/privacy', 'StaticPagesController@privacy')->name('privacy');
Route::get('/faq', 'StaticPagesController@faq')->name('faq');

Route::get('/students', 'StudentsController@index')->name('students');
Route::get('/students/show/{slug}', 'StudentsController@show')->name('students.show');

