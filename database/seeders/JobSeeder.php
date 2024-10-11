<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     User::factory()->create([
         'first_name' => 'John',
         'last_name' => 'Doe',
         'email' => 'test@example.com'
        ]);
     $this->call(JobSeeder::class);
    }
}
