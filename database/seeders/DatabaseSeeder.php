<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Generate 10 random tasks using the factory
        Task::factory()->count(10)->create();
    }
}
