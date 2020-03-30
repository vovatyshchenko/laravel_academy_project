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

Route::get('/', 'ViewsController@index');
Route::get('/about', 'ViewsController@about');
//Route::get('/admin', 'ViewsController@admin');
//Route::get('admin/staff', 'ViewsController@staff');
//Route::get('admin/services', 'ViewsController@services');
//Route::get('admin/schedule', 'ViewsController@schedule');

Route::resource('users', 'UserController');
Route::resource('admin/staff', 'MasterController');
Route::resource('admin/services', 'ServiceController');
Route::resource('admin/schedule', 'ScheduleController');
Route::resource('admin', 'OrderController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
