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

// Route::get('/', function () {
//     return view('dashboard');
// });
Route::get('/', 'ShowTotalController@total');
// View::composer('dashboard','ShowTotalController@totalEngineer');

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
Route::get('/EditProject/','MiniUserController@EditPro');


Route::get('/dashboard', 'ShowTotalController@total');
Route::get('/dashboard/totalEngineer', 'ShowEngiDashboardController@ShowEngineer');
Route::get('/dashboard/totalTeam', 'ShowTeamDashboardController@ShowTeam');
Route::get('/dashboard/totalProject', 'ShowProjDashboardController@ShowProject');
Route::get('/dashboard/tableTopEngineer', 'ShowTopEngineerController@ShowTopEngineer');
// Route::get('/dashboard/tableTopEngineer', 'MiniUserController@TableTopEngineer');



//Route::get('TeamManagement','MiniUserController@IndexTm');
//Route::get('AddTeam','MiniUserController@AddTm');
//Route::get('EditTeam','MiniUserController@EditTm');

Route::get('TeamManagement','TeamController@IndexTm');
Route::get('AddTeam','TeamController@AddTm');
Route::post('AddTeamController','TeamController@AddTeam');
Route::get('EditTeam','TeamController@EditTm');
Route::post('EditTeamController','TeamController@EditTeam');
Route::get('DelTeam/{id}','TeamController@DelTm');

Route::get('/checkDB', function ()
{
    dd(DB::connection()->getDatabaseName());
});


Route::get('/home', 'HomeController@index')->name('home');
// Auth::routes();



