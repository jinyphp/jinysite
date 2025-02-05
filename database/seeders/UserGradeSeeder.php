<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserGradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_grade')->insert(array (
  0 => 
  array (
    'id' => 1,
    'enable' => '1',
    'name' => '일반회원',
    'description' => NULL,
    'users' => 0,
    'created_at' => '2024-12-15 09:15:34',
    'updated_at' => '2024-12-15 09:15:34',
  ),
  1 => 
  array (
    'id' => 2,
    'enable' => '0',
    'name' => '특별회원',
    'description' => '특별한 회원을 관리합니다.',
    'users' => 1,
    'created_at' => '2024-12-15 09:15:41',
    'updated_at' => '2024-12-21 08:22:51',
  ),
));
    }
}
