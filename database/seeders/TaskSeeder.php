<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Task::create([
        'title'=>'Task de Exemplo',
        'due_date'=>'2023-12-12 00:00:00',
        'description'=>'Uma task de exemplo...',
        'priority'=>'Média',
        'user_id' => 1,
        'category_id'=> 1
       ]);
    }
}
