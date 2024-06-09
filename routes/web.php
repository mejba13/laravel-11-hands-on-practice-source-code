<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\job;


Route::get('/', function () {
    return view('home');
});

// Normar code
//Route::get('/jobs', function () {
//    return view('jobs', [
//        'jobs' => Job::all()
//    ]);
//});

// Eager Loading abd solved N+1 issue
//Route::get('/jobs', function () {
//    $job = Job::with('employer')->get();
//
//    return view('jobs', [
//        'jobs' => $job
//    ]);
//});
//
Route::get('/jobs', function () {
//    $job = Job::with('employer')->paginate(5);
//    $job = Job::with('employer')->simplePaginate(5);
    $job = Job::with('employer')->cursorPaginate(5);

    return view('jobs', [
        'jobs' => $job
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
