<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use Illuminate\Database\Eloquent\Model;

// Home page route
Route::get('/', function () {
    return view('home'); // Leads to the home view
});

// Regular job listing route
Route::get('/jobs', function ()  {
    $jobs = Job::with('employer')->latest()->simplePaginate(5);

    return view('jobs.index', [
        'jobs' => $jobs // Leads to the jobs.index view with paginated job listings
    ]);
});

// Job details route with id
Route::get('/job{id}', function ($id) {
    $job = Job::find($id);

    if (!$job) {
        // Job not found, return a 404 or display a custom message
        return view('job', ['job' => null]); // Leads to the job view with null if job not found
    }

    return view('jobs.show', ['job' => $job]); // Leads to the jobs.show view with job details
});

// Job creation form route
Route::get('/jobs/create', function() {
    return view('jobs.create'); // Leads to the jobs.create view
});

// Job creation submission route
Route::post('/jobs', function () {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);

    return redirect('/jobs'); // Redirects to the jobs listing page after creation
});

Route::get('/jobs/{id}/edit', function ($id) {
    $job = Job::find($id);

    return view('jobs.edit', ['job' => $job]); // Leads to the jobs.edit view with job details
});
// Contact page route
Route::get('/contact', function () {
    return view('contact'); // Leads to the contact view
});