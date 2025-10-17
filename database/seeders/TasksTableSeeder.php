<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use DB;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
  {
    DB::table('users')->insert([
        ['name' => 'User 1', 'email' => 'user1@gmail.com', 'password' => Hash::make('12345678')],
        ['name' => 'User 2', 'email' => 'user2@gmail.com', 'password' => Hash::make('12345678')],
        ['name' => 'User 3', 'email' => 'user3@gmail.com', 'password' => Hash::make('12345678')],
        ['name' => 'User 4', 'email' => 'user4@gmail.com', 'password' => Hash::make('12345678')],
    ]);

    DB::table('tasks')->insert([
        ['user_id' => 1, 'name' => 'Task 1', 'description' => 'Hi, this is my first task', 'priority' => 'high'],
        ['user_id' => 1, 'name' => 'Task 2', 'description' => 'Second task for user 1', 'priority' => 'medium'],
        ['user_id' => 2, 'name' => 'Task 3', 'description' => 'User 2 task example', 'priority' => 'low'],
        ['user_id' => 2, 'name' => 'Task 4', 'description' => 'Another task for user 2', 'priority' => 'high'],
        ['user_id' => 3, 'name' => 'Task 5', 'description' => 'Task for user 3', 'priority' => 'medium'],
        ['user_id' => 4, 'name' => 'Task 6', 'description' => 'Task for user 4', 'priority' => 'low'],
    ]);
  }
}
