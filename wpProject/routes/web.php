<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AlumniController;

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

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('/','App\Http\Controllers\StudentController@index');

Route::resource('students', StudentController::class);
Route::resource('alumnis', AlumniController::class);

Route::get('index',[StudentController::class,'index']);


Route::get('members',[StudentController::class,'members']);
Route::get('clubmembers',[StudentController::class,'clubmembers']);
Route::get('Alumni_list',[AlumniController::class,'Alumni_list']);


Route::get('register',[StudentController::class,'register']);
Route::get('create',[StudentController::class,'create']);
Route::get('Alumni_create',[AlumniController::class,'Alumni_create']);


Route::get('adminpanel',[StudentController::class,'adminpanel']);
Route::get('EUmemberslist',[StudentController::class,'EUmemberslist']);
Route::get('Alumni_edit_update_list',[AlumniController::class,'Alumni_edit_update_list']);


Route::get('slider',[StudentController::class,'slider']);
Route::get('header',[StudentController::class,'header']);
Route::get('gallery',[StudentController::class,'gallery']);
Route::get('judge',[StudentController::class,'judge']);
Route::get('guide',[StudentController::class,'guide']);
Route::get('admin',[StudentController::class,'admin']);
Route::get('adminpanel',[StudentController::class,'adminpanel']);

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
