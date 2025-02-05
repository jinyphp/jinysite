<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserCountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_country')->insert(array (
  0 => 
  array (
    'id' => 1,
    'created_at' => '2024-08-22 11:03:20',
    'updated_at' => '2024-08-22 11:03:20',
    'enable' => '1',
    'code' => 'kr',
    'flag' => NULL,
    'name' => '대한민국',
    'description' => NULL,
  ),
  1 => 
  array (
    'id' => 2,
    'created_at' => '2024-08-22 11:03:36',
    'updated_at' => '2024-08-22 11:03:36',
    'enable' => '1',
    'code' => 'japan',
    'flag' => NULL,
    'name' => '일본',
    'description' => NULL,
  ),
  2 => 
  array (
    'id' => 3,
    'created_at' => '2024-08-22 11:03:50',
    'updated_at' => '2024-08-22 11:03:50',
    'enable' => '1',
    'code' => 'china',
    'flag' => NULL,
    'name' => '중국',
    'description' => NULL,
  ),
  3 => 
  array (
    'id' => 4,
    'created_at' => '2024-10-18 09:42:28',
    'updated_at' => '2024-10-18 09:42:28',
    'enable' => '1',
    'code' => 'us',
    'flag' => NULL,
    'name' => '미국',
    'description' => NULL,
  ),
));
    }
}
