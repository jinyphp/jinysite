<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserPasswordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_password')->insert(array (
  0 => 
  array (
    'id' => 1,
    'created_at' => '2024-10-18 08:02:45',
    'updated_at' => '2024-10-18 08:05:15',
    'user_id' => 11,
    'email' => 'infohojin6@jinyphp.com',
    'enable' => NULL,
    'expire' => '2025-04-18 07:25:21',
    'description' => NULL,
    'admin_id' => 0,
  ),
  1 => 
  array (
    'id' => 2,
    'created_at' => '2024-12-15 08:42:47',
    'updated_at' => '2024-12-15 08:52:15',
    'user_id' => 16,
    'email' => NULL,
    'enable' => '0',
    'expire' => '2024-12-18',
    'description' => NULL,
    'admin_id' => 0,
  ),
));
    }
}
