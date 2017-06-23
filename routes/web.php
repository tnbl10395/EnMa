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
    return view('dashboard');
});
Route::get('test', function (){
    return view('test');
});
Route::get('login', function(){
    return view('login');
});
Route::get('index', function () {
    return view('index3');
});
Route::get('/EngineerManagement','MiniUserController@IndexEm');
Route::get('/AddEngineer','MiniUserController@AddEm');
Route::get('/EditEngineer','MiniUserController@EditEm');
Route::get('/AddEngineerController','AddEngineerController@AddEngineer');

Route::get('/ProjectManagement','MiniUserController@IndexPro');
Route::get('/AddProject','MiniUserController@AddPro');
Route::get('/EditProject','MiniUserController@EditPro');

Route::get('/dashboard', 'MiniUserController@Dashboard');
Route::get('/dashboard/totalEngineer', 'MiniUserController@TotalEngineer');
Route::get('/dashboard/totalTeam', 'MiniUserController@TotalTeam');
Route::get('/dashboard/totalProject', 'MiniUserController@TotalProject');
Route::get('/dashboard/tableTopEngineer', 'MiniUserController@TableTopEngineer');

Route::get('TeamManagement','MiniUserController@IndexTm');
Route::get('AddTeam','MiniUserController@AddTm');
Route::get('EditTeam','MiniUserController@EditTm');

Route::get('/checkDB', function ()
{
    dd(DB::connection()->getDatabaseName());
});


Route::get('/home', 'HomeController@index')->name('home');
// Auth::routes();



