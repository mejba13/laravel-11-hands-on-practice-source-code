<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\job;


Route::get('/', function () {
    return view('home');
});


Route::get('/jobs', function () {
    $job = Job::with('employer')->latest()->simplePaginate(5);

    return view('jobs.index', [
        'jobs' => $job
    ]);
});

Route::get('jobs/create', function () {
    return view('jobs.create');
});

Route::get('/jobs/{id}', function ($id) {

    $job = job::find($id);

    if (!$job) {
        abort(404);
    }

    return view('jobs.show', ['job' => $job]);
});

Route::post('/jobs', function () {
//    dd(request('title'));

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);

    return redirect('/jobs');
});

Route::get('/contact', function () {
    return view('contact');
});
