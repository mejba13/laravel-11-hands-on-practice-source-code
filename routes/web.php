<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::view('/', 'home');

//Route::controller(JobController::class)->group(function(){
//    Route::get('/jobs','index');
//    Route::get('/jobs/create','create');
//    Route::post('/jobs/{$job}','show');
//    Route::get('/jobs','store');
//    Route::put('/jobs/{job}/edit','edit');
//    Route::patch('/jobs/{job}','update');
//    Route::delete('/jobs/{job}','destroy');
//});

Route::resource('jobs', JobController::class);

//Auth

Route::get('/register',[RegisterUserController::class,'create']);
Route::post('/register',[RegisterUserController::class,'store']);

Route::get('/login',[SessionController::class,'create']);
Route::post('/login',[SessionController::class,'store']);

Route::view('/contact','contact');
