<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;


Route::view('/', 'home'); 
Route::view('/contact', 'contact'); 

Route::resource('jobs', JobController::class);

Route::controller(JobController::class)->group(function (){
    Route::get('/jobs', 'index');
    Route::get('/job{job}', 'show');
    Route::get('/jobs/create', 'create');
    Route::post('/jobs', 'store');
    Route::get('/jobs/{job}/edit', 'edit');
    Route::patch('/job{job}', 'update');
    Route::delete('/job{job}', 'destroy');
}); 


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

//Auth

Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);