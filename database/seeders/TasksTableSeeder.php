<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
          ['name' => 'Usuario 1', 'email' => 'usuario1@gmail.com',
          'password' => '12345678'],
        ]);

        DB::table('tasks')->insert([
          ['user_id' => '2', 'name' => 'Tarea 1',
          'description' => 'Hola, esta es mi primera tarea', 'priority' => 'high'],
        ]);
    }
}
