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
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::get('/', function () {
    return view('frontend.pages.home');
})->name('index');

Route::get('/applications',  'Frontend\BasicInfoController@index')->name('application.list');
Route::get('/applications/create',  'Frontend\BasicInfoController@create')->name('application.create');
Route::post('/applicationForm',  'Frontend\BasicInfoController@store')->name('applicationForm');

Auth::routes();

