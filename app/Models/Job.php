<?php 

namespace App\Models;

use Illuminate\Support\Arr;

class Job {
    public static function all(): array
    {
        return [ 
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
            ]
        ];
    }

    public static function find(int $id)
    {
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);
      if (! $job ) {
          abort(404);
      }
    }
}
