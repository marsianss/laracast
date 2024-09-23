<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;


    // home page
Route::get('/', function () {
    return view('home');
});

//regular job listing
Route::get('/jobs', function ()  {
    $job = Job::all();
    return view('job', ['job' => $job]);
});

//job details with id
Route::get('/job{id}', function ($id)  {
    $job = Job::find($id);
    return view('job', ['job' => $job]);
});



Route::get('/contact', function () {
    return view('contact');
});
