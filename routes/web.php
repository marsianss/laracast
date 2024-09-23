<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use Illuminate\Database\Eloquent\Model;


    // home page
Route::get('/', function () {
   $jobs=  Job::all(); 
    
    dd($jobs);
    
    // return view('home');
});

//regular job listing
Route::get('/jobs', function ()  {
    $job = Job::all();
    return view('job', ['job' => $job]);
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
