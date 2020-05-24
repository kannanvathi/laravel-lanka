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


Route::get('home', function () {
    return view('home1');
});
Route::get('contact', function(){
    return view('contact');
});
Route::get('about', function(){
    return view('about');
});
Route::get('welcome/{lang}', function($lang){
    App::setLocale($lang);
    return view('welcome');
});

Route::post('form_submit', 'formSubmit@index');
Route::view('file-upload', 'file-upload');
Route::post('fileUpload', 'formSubmit@imgUpload');
Route::get('query-builder', 'queryBuilder@index');

Route::get('insertData', 'formSubmit@insert');
Route::get('joinData', 'queryBuilder@joinData');
Route::get('update', 'formSubmit@getData');
Route::post('update_submit', 'formSubmit@updateData');

Route::view('sidebar', 'sidebar');
Route::view('sidebar-1', 'sidebar-1');

Route::get('joinData2', 'joinData@index');

Route::get('accessors', 'accessors@index');
Route::get('mutators', 'accessors@mutator');
Route::get('one-relationship', 'relationship@one');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');


