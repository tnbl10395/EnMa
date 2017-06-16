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

Route::get('/', function () {
    return view('index');
});
Route::get('test', function (){
    return view('test');
});
Route::get('login', function(){
    return view('login');
});
Route::get('EM', function(){
    return view('IndexEngiManage');
});
Route::get('AddEn', function(){
    return view('FormInsertEngi');
});
Route::get('EditEn', function(){
    return view('FormEditEngi');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
