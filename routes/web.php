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

Route::get('/', 'StaticPagesController@index');
Route::get('/privacy', 'StaticPagesController@privacy');
Route::get('/faq', 'StaticPagesController@faq');

Route::get('/students', 'StudentsController@index');
Route::get('/students/show/{id}', 'StudentsController@show')->name('students.show');
