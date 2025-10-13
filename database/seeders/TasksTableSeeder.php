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
          ['name' => 'User 1', 'email' => 'user1@gmail.com',
          'password' => Hash::make('12345678')],
        ]);

        DB::table('users')->insert([
          ['name' => 'User 2', 'email' => 'user2@gmail.com',
          'password' => Hash::make('12345678')],
        ]);

        DB::table('tasks')->insert([
          ['user_id' => '1', 'name' => 'Task 1',
          'description' => 'Hi, this is my first task', 'priority' => 'high'],
        ]);
    }
}
