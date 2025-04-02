<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UplodeController;
use App\Http\Controllers\Userscontroller;
use App\Http\Controllers\Studentcontroller;
use App\Http\Controllers\Staffdatailcontroller;
use App\Http\Controllers\User1controllers;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\ImageController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('submit', [UserController::class, 'addUser']);
Route::get('form', function () {
    return view('user-form');
     });


Route::view('other','otherform');
Route::post('otherform', [UserController::class,'otherform']);

Route::view('uplode', 'uplodefile');
Route::post('file',[UplodeController::class,'uplode']);


Route::get('users', [Userscontroller::class, 'index']);


Route::get('/stud', [Studentcontroller::class, 'student']);


Route::get('/staff', [Staffdatailcontroller::class, 'queries']);

// Route::get('user', [User1controllers::class, 'get']);
// Route::post('user', [User1controllers::class, 'post']);
// Route::put('user', [User1controllers::class, 'put']);
// Route::delete('user', [User1controllers::class, 'delete']);
// Route::patch('user', [User1controllers::class, 'patch']);
// Route::any('/user',[User1controllers::class, 'GROUP1']);

Route::match(['get', 'post'], '/user', [User1controllers::class, 'GROUP1']);
Route::match(['put', 'delete'], '/user', [User1controllers::class, 'GROUP2']);
Route::view('form1', 'user');

Route::view('add','addschooldata');
Route::post('school',[SchoolController::class,'Adddata']);

Route::get('li',[SchoolController::class,'list']);
Route::get('delete/{id}',[SchoolController::class,'delete']);
Route::get('update/{id}',[SchoolController::class,'update']);
Route::put('edit/{id}',[SchoolController::class,'editdata']);
Route::get('search',[SchoolController::class,'search']);
Route::post('selectmulti',[SchoolController::class,'multidata']);

Route::view('lode', 'imageuplode');
Route::post('upload',[ImageController::class,'upload']);
Route::get('list' , [ImageController::class, 'Img']);