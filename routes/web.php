<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\MembersController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource("/student", StudentController::class);
Route::resource("/member", MembersController::class);
Route::get('/ver', [MembersController::class, 'ver'])->name('ver');
Route::get('/members/inde', [MembersController::class, 'inde'])->name('inde');
