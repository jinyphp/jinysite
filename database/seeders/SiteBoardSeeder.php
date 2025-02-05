<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiteBoardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('site_board')->insert(array (
  0 => 
  array (
    'id' => 1,
    'created_at' => '2024-07-29 08:27:27',
    'updated_at' => '2024-07-29 09:37:05',
    'enable' => '1',
    'code' => '87f0f7c',
    'slug' => 'news',
    'title' => '뉴스룸',
    'subtitle' => NULL,
    'image' => NULL,
    'header' => '계시판 상단 꾸밈내용',
    'footer' => '계시판 하단 꾸밈내용',
    'view_layout' => NULL,
    'view_table' => NULL,
    'view_list' => NULL,
    'view_filter' => NULL,
    'view_create' => NULL,
    'view_detail' => NULL,
    'view_edit' => NULL,
    'view_form' => NULL,
    'permit_read' => NULL,
    'permit_create' => NULL,
    'permit_edit' => NULL,
    'permit_delete' => NULL,
    'manager' => '1:hojin',
    'post' => 0,
  ),
));
    }
}
