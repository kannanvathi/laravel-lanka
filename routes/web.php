<?php

use Illuminate\Support\Facades\Route;
use  \Illuminate\Support\Str;
use \App\Mail\sampleMail;


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


Route::get('home1', function () {
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
Route::post('login_auth', function(){
   return redirect() ;
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('form_table/{item:email}', 'routeBinding@index');

/*$info = 'is this fluent string';
$info = Str::replaceFirst('is this', 'this is', $info);
$info = Str::ucfirst($info);
$info = Str::camel($info);

$info = Str::of($info)->replaceFirst('is this', 'this is', $info)
        ->ucfirst($info)
    ->camel($info);

echo $info;*/

Route::get('mail', function(){
    return new sampleMail();
});
Route::middleware('auth:sanctum')->post('login_auth', 'apiController@index');
