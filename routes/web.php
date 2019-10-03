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

use App\Http\Controllers\ProjectsController;

Route::resource('projects', 'ProjectsController');
Route::post('projects/{project}/tasks', 'ProjectTaskController@store');
Route::post('/completed-tasks', 'CompletedTaskController@store');
Route::delete('/completed-tasks', 'CompletedTaskController@destroy');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
