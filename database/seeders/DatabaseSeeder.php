<?php

namespace Database\Seeders;

use App\Auth\Infrastructure\Models\User;
use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Rob Watson',
            'email' => 'rob.watson@me.com',
        ]);
    }
}
