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

// create here
Route::get('jobs/create', function () {
    return view('jobs.create');
});

//show
Route::get('/jobs/{id}', function ($id) {

    $job = job::find($id);

    if (!$job) {
        abort(404);
    }

    return view('jobs.show', ['job' => $job]);
});

//store
Route::post('/jobs', function () {
//    dd(request('title'));

    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required', 'numeric'],
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);

    return redirect('/jobs');
});


//edit
Route::get('/jobs/{id}/edit', function ($id) {

    $job = job::find($id);

    if (!$job) {
        abort(404);
    }

    return view('jobs.edit', ['job' => $job]);
});

//update
Route::patch('/jobs/{id}/', function ($id) {

    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required', 'numeric'],
    ]);

    $job = Job::findOrFail($id); // return all

    $job->title = request('title');
    $job->salary = request('salary');
    $job->save();

    $job->update([
        'title' => request('title'),
        'salary' => request('salary'),
    ]);

    return redirect('/jobs/'. $job->id);

});

//Destroy
Route::delete('/jobs/{id}', function ($id) {
    Job::findOrFail($id)->delete();
    return redirect('/jobs');
});

Route::get('/contact', function () {
    return view('contact');
});
