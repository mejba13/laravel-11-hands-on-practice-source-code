<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::view('/', 'home');

Route::resource('jobs', JobController::class)->only(['index', 'show']);
Route::resource('jobs', JobController::class)->except('index','show')->middleware('auth');

//Auth

Route::get('/register',[RegisterUserController::class,'create']);
Route::post('/register',[RegisterUserController::class,'store']);

Route::get('/login',[SessionController::class,'create'])->name('login');
Route::post('/login',[SessionController::class,'store']);
Route::post('/logout',[SessionController::class,'destroy']);

Route::view('/contact','contact');
