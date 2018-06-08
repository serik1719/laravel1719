<?php

use Illuminate\Database\Seeder;
use App\Models\Task;

class TasksSeeder extends Seeder{
    
    public function run() {
//    DB::table('Tasks')->delete();
        
    for ($i = 1; $i <= 6; $i++) {
        $name = 'Task migrate ' . rand(1, 30);
        $completed = false;

        Task::create([
            'name' => $name ,
            'completed' => $completed
        ]);
    }
    
    }
}
