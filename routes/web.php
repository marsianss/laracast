<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use Illuminate\Database\Eloquent\Model;


    // home page
Route::get('/', function () {
 return view('home');
});

//regular job listing
Route::get('/jobs', function ()  {
    $jobs = Job::with('employer')->simplePaginate(5);

    
    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});

//job details with id
Route::get('/job{id}', function ($id) {
    $job = Job::find($id);

    if (!$job) {
        // Job not found, return a 404 or display a custom message
        return view('job', ['job' => null]);
    }

    return view('jobs.show', ['job' => $job]);
});

Route::get('/jobs/create', function() {
    return view('jobs.create');
});

Route::post('/jobs', function () {
    dd(request()->all());
});


Route::get('/contact', function () {
    return view('contact');
});
