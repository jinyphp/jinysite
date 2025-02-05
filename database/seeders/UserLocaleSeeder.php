<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserLocaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_locale')->insert(array (
  0 => 
  array (
    'id' => 1,
    'created_at' => NULL,
    'updated_at' => NULL,
    'user_id' => 11,
    'email' => 'infohojin6@jinyphp.com',
    'enable' => NULL,
    'ip' => NULL,
    'country' => '4:미국',
    'language' => NULL,
    'description' => NULL,
    'admin_id' => 0,
  ),
  1 => 
  array (
    'id' => 2,
    'created_at' => '2024-12-21 05:40:32',
    'updated_at' => '2024-12-21 08:16:54',
    'user_id' => 21,
    'email' => 'infohojin1@gmail.com',
    'enable' => NULL,
    'ip' => NULL,
    'country' => '4:미국',
    'language' => '1:한국어',
    'description' => NULL,
    'admin_id' => 0,
  ),
  2 => 
  array (
    'id' => 3,
    'created_at' => '2024-12-21 15:23:33',
    'updated_at' => '2024-12-21 15:23:33',
    'user_id' => 14,
    'email' => 'infohojin10@jinyphp.com',
    'enable' => NULL,
    'ip' => NULL,
    'country' => '1:대한민국',
    'language' => '1:한국어',
    'description' => NULL,
    'admin_id' => 0,
  ),
  3 => 
  array (
    'id' => 4,
    'created_at' => '2024-12-25 08:01:33',
    'updated_at' => '2024-12-25 08:03:51',
    'user_id' => 1,
    'email' => 'infohojin@naver.com',
    'enable' => NULL,
    'ip' => NULL,
    'country' => NULL,
    'language' => NULL,
    'description' => NULL,
    'admin_id' => 0,
  ),
));
    }
}
