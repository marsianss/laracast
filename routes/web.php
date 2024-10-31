<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Jobs\TranslateJob;
use App\Models\User;

Route::get('test', function () {
    $job = Job::first();

    TranslateJob::dispatch($job);

    return 'Done';
});



Route::view('/', 'home');
Route::view('/contact', 'contact');



    Route::get('/jobs', [JobController::class, 'index']);
    Route::get('/job{job}', [JobController::class, 'show']);
    Route::get('/jobs/create', [JobController::class, 'create']);

    Route::post('/jobs', [JobController::class, 'store'])
    ->middleware('auth');

    Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])
    ->middleware('auth')
    ->can('edit', 'job');

    Route::patch('/job{job}', [JobController::class, 'update']);
    Route::delete('/job{job}', [JobController::class, 'destroy']);


    //Auth

Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);

/*
Route::resource('jobs', JobController::class, [
    'only' => ['index', 'show', 'create', 'store', 'edit', 'update', 'destroy']
]);
*/
/*
Route::get('/jobs', [JobController::class, 'index']);
Route::get('/job{job}', [JobController::class, 'show']);
Route::get('/jobs/create', [JobController::class, 'create']);
Route::post('/jobs', [JobController::class, 'store']);
Route::get('/jobs/{job}/edit', [JobController::class, 'edit']);
Route::patch('/job{job}', [JobController::class, 'update']);
Route::delete('/job{job}', [JobController::class, 'destroy']);
*/

