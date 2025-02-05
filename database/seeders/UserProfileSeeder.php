<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_profile')->insert(array (
  0 => 
  array (
    'id' => 1,
    'created_at' => '2024-12-24 06:48:28',
    'updated_at' => '2024-12-24 08:53:59',
    'user_id' => 1,
    'firstname' => NULL,
    'lastname' => NULL,
    'description' => '임대 경험이 풍부하고 방대한 데이터베이스를 보유하고 있어 고객님께 적합한 옵션을 신속하게 찾아드릴 수 있습니다. 원활하고 흥미진진한 임대 경험을 찾고 계신가요? 지금 바로 연락주세요 - 절대 지루하지 않을 것을 약속드립니다! 고객님의 완벽한 집이 전화 한 통이면 됩니다.',
    'skill' => 'PHP, javascript',
    'country' => NULL,
    'language' => NULL,
    'timezone' => NULL,
    'phone' => NULL,
    'mobile' => NULL,
    'fax' => NULL,
    'post' => NULL,
    'address1' => NULL,
    'address2' => NULL,
  ),
  1 => 
  array (
    'id' => 2,
    'created_at' => '2025-01-03 09:00:52',
    'updated_at' => '2025-01-03 09:00:52',
    'user_id' => 23,
    'firstname' => NULL,
    'lastname' => NULL,
    'description' => NULL,
    'skill' => NULL,
    'country' => NULL,
    'language' => NULL,
    'timezone' => NULL,
    'phone' => NULL,
    'mobile' => NULL,
    'fax' => NULL,
    'post' => NULL,
    'address1' => NULL,
    'address2' => NULL,
  ),
  2 => 
  array (
    'id' => 3,
    'created_at' => '2025-01-07 10:05:25',
    'updated_at' => '2025-01-07 10:05:25',
    'user_id' => 32,
    'firstname' => NULL,
    'lastname' => NULL,
    'description' => NULL,
    'skill' => NULL,
    'country' => NULL,
    'language' => NULL,
    'timezone' => NULL,
    'phone' => NULL,
    'mobile' => NULL,
    'fax' => NULL,
    'post' => NULL,
    'address1' => NULL,
    'address2' => NULL,
  ),
  3 => 
  array (
    'id' => 4,
    'created_at' => '2025-01-07 10:06:46',
    'updated_at' => '2025-01-07 10:06:46',
    'user_id' => 33,
    'firstname' => NULL,
    'lastname' => NULL,
    'description' => NULL,
    'skill' => NULL,
    'country' => NULL,
    'language' => NULL,
    'timezone' => NULL,
    'phone' => NULL,
    'mobile' => NULL,
    'fax' => NULL,
    'post' => NULL,
    'address1' => NULL,
    'address2' => NULL,
  ),
));
    }
}
