<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Event::truncate();
        Application::truncate();

        Event::factory()->count(50)->create();
        Application::factory()->count(50)->create();
    }
}
