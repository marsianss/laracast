<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' =>  [ 
            [
                'id' => 1,
                'title' => 'Director', 
                'salary' => '$100k',
            ],
            [
                'id' => 2,
                'title' => 'Programmer', 
                'salary' => '$10k',
            ],
            [
                'id' => 3,
                'title' => 'Teacher', 
                'salary' => '$40k',
            ],
            [
                'id' => 4,
                'title' => 'Developer', 
                'salary' => '$20k',
            ],
        ]
    ]); 
});

Route::get('/job{id}', function ($id) {
    $job = [
        [
            'id' => 1,
            'title' => 'Director', 
            'salary' => '$100k',
        ],
        [
            'id' => 2,
            'title' => 'Programmer', 
            'salary' => '$10k',
        ],
        [
            'id' => 3,
            'title' => 'Teacher', 
            'salary' => '$40k',
        ],
        [
            'id' => 4,
            'title' => 'Developer', 
            'salary' => '$20k',
        ],
    ];

    $job = Arr::first($job, fn($job) => $job['id'] == $id);

    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});
