<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersAuthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users_auth')->insert(array (
  0 => 
  array (
    'id' => 2,
    'created_at' => '2024-10-17 09:41:25',
    'updated_at' => '2024-10-17 10:18:02',
    'enable' => NULL,
    'email' => 'infohojin@jinyphp.com',
    'user_id' => 0,
    'auth' => '1',
    'auth_date' => '2024-10-17 10:18:02',
    'description' => NULL,
    'admin_id' => 0,
    'manager_id' => 0,
  ),
  1 => 
  array (
    'id' => 3,
    'created_at' => '2024-10-18 07:19:28',
    'updated_at' => '2024-10-18 07:21:02',
    'enable' => '1',
    'email' => 'infohojin6@jinyphp.com',
    'user_id' => 11,
    'auth' => '1',
    'auth_date' => '2024-10-18 07:21:02',
    'description' => '자동승인',
    'admin_id' => 0,
    'manager_id' => 0,
  ),
  2 => 
  array (
    'id' => 4,
    'created_at' => '2024-10-18 09:22:58',
    'updated_at' => '2024-10-18 09:22:58',
    'enable' => '1',
    'email' => 'infohojin7@jinyphp.com',
    'user_id' => 12,
    'auth' => '1',
    'auth_date' => '2024-10-18 09:22:58',
    'description' => '자동 인증',
    'admin_id' => 0,
    'manager_id' => 0,
  ),
  3 => 
  array (
    'id' => 5,
    'created_at' => '2024-10-18 09:25:27',
    'updated_at' => '2024-10-18 09:25:27',
    'enable' => '1',
    'email' => 'infohojin8@jinyphp.com',
    'user_id' => 13,
    'auth' => '1',
    'auth_date' => '2024-10-18 09:25:27',
    'description' => '자동 인증',
    'admin_id' => 0,
    'manager_id' => 0,
  ),
  4 => 
  array (
    'id' => 6,
    'created_at' => '2024-11-18 02:24:11',
    'updated_at' => '2024-11-18 02:24:11',
    'enable' => '1',
    'email' => 'infohojin@gmail.com',
    'user_id' => 16,
    'auth' => '1',
    'auth_date' => '2024-12-13 18:28:59',
    'description' => '자동 인증',
    'admin_id' => 1,
    'manager_id' => 0,
  ),
));
    }
}
