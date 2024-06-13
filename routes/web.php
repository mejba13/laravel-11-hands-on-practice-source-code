<?php

use App\Http\Controllers\JobController;
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

Route::view('/contact','contact');
