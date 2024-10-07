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

    
    return view('jobs', [
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

    return view('job', ['job' => $job]);
});



Route::get('/contact', function () {
    return view('contact');
});
