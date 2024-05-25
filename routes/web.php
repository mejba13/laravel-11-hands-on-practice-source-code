<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\job;


Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Job::all()
    ]);
});

Route::get('/jobs/{id}', function ($id) {

    $job = job::find($id);

    if (!$job) {
        abort(404);
    }

    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});
