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
    ['name' => 'Carlos Lopez', 'email' => 'carlos.lopez@gmail.com', 'password' => Hash::make('12345678')],
    ['name' => 'Maria Fernandez', 'email' => 'maria.fernandez@gmail.com', 'password' => Hash::make('12345678')],
    ['name' => 'John Perez', 'email' => 'john.perez@gmail.com', 'password' => Hash::make('12345678')],
    ['name' => 'Laura Gomez', 'email' => 'laura.gomez@gmail.com', 'password' => Hash::make('12345678')],
]);

    DB::table('tasks')->insert([
    [
        'user_id' => 1,
        'name' => 'Prepare monthly report',
        'description' => 'Collect sales data and prepare the financial report for September.',
        'priority' => 'high',
    ],
    [
        'user_id' => 1,
        'name' => 'Update client database',
        'description' => 'Review and update contact information for active clients.',
        'priority' => 'medium',
    ],
    [
        'user_id' => 2,
        'name' => 'Design new promotional banner',
        'description' => 'Create a banner for the upcoming autumn marketing campaign.',
        'priority' => 'high',
    ],
    [
        'user_id' => 2,
        'name' => 'Review website content',
        'description' => 'Check for typos and update the homepage text with new product details.',
        'priority' => 'low',
    ],
    [
        'user_id' => 3,
        'name' => 'Set up testing server',
        'description' => 'Install dependencies and configure the environment for the new project.',
        'priority' => 'medium',
    ],
    [
        'user_id' => 4,
        'name' => 'Handle support requests',
        'description' => 'Respond to pending support tickets and document frequent issues.',
        'priority' => 'high',
    ],
]);
  }
}
