<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
class JobController extends Controller
{
 public function index()
 {
    $jobs = Job::with('employer')->latest()->simplePaginate(5);

    return view('jobs.index', [
        'jobs' => $jobs // Leads to the jobs.index view with paginated job listings
    ]);
 }

 public function create()
 {
return view('jobs.create');
 }

 public function show(Job $job)
 {
    return view('jobs.show', ['job' => $job]);
 }

 public function store()
 {
request()->validate([
    'title' => ['required', 'min:3'],
    'salary' => ['required']
]); 

Job::create([
    'title' => request('title'),
    'salary' => request('salary'),
    'employer_id' => 1
]);

return redirect('/jobs');
 }

 public function edit(Job $job)
 {
return view('jobs.edit', ['job' => $job]);
 }


 public function update(Job $job)
 {
//authorize on hold

request()->validate([
    'title' => ['required', 'min:3'],
    'salary' => ['required']
]);

$id = $job->id;
$job->update([
    'title' => request('title'),
    'salary' => request('salary')
]);

// Redirect to job page (without slash)
return redirect("/job{$id}");
 }


 public function destroy(Job $job)
 {
    $job->delete();
    return redirect('/jobs');
 }
}
