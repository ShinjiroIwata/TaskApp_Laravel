<?php
// database/seeders/TaskSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    public function run()
    {
        Task::create(['title' => 'First Task']);
        Task::create(['title' => 'Second Task']);
        Task::create(['title' => 'Third Task']);
    }
}
