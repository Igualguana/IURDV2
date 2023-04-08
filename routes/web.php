<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});
Route::resource("/student", StudentController::class);
Route::resource("/member", MembersController::class);

Route::get('/members/inde', [MembersController::class, 'inde'])->name('inde');

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {
  
    Route::resource('users', UserController::class);
    Route::resource('roles', RoleController::class);
    Route::get('/ver', [MembersController::class, 'ver'])->name('ver');
});

