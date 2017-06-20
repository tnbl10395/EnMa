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
Route::get('/EngineerManagement','MiniUserController@IndexEm');
Route::get('/AddEngineer','MiniUserController@AddEm');
Route::get('/EditEngineer','MiniUserController@EditEm');

Route::get('/AddEngineerController','AddEngineerController@AddEngineer');

Route::get('/ProjectManagement','MiniUserController@IndexPro');
Route::get('/AddProject','MiniUserController@AddPro');
Route::get('/EditProject','MiniUserController@EditPro');


Route::post('/AddEngineerController','AddEngineerController@AddEngineer');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/home', 'HomeController@index')->name('home');



Route::get('/home', 'HomeController@index')->name('home');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/checkDB', function ()
{
    dd(DB::connection()->getDatabaseName());
});

Route::get('TeamManagement','MiniUserController@IndexTm');
Route::get('AddTeam','MiniUserController@AddTm');
Route::get('EditTeam','MiniUserController@EditTm');

