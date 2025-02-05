<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiteHelpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('site_help')->insert(array (
  0 => 
  array (
    'id' => 1,
    'created_at' => '2024-10-02 10:24:38',
    'updated_at' => '2024-10-02 11:13:10',
    'enable' => NULL,
    'cate' => '1:delivery',
    'title' => 'Can I track my order in real-time?',
    'content' => 'adsfasdf',
    'image' => NULL,
    'manager' => NULL,
    'pos' => 1,
  ),
  1 => 
  array (
    'id' => 2,
    'created_at' => '2024-10-02 11:02:58',
    'updated_at' => '2024-10-02 11:13:14',
    'enable' => NULL,
    'cate' => '1:delivery',
    'title' => 'Is there an option for express delivery?',
    'content' => NULL,
    'image' => NULL,
    'manager' => NULL,
    'pos' => 1,
  ),
  2 => 
  array (
    'id' => 3,
    'created_at' => '2024-10-02 11:03:33',
    'updated_at' => '2024-10-02 11:13:39',
    'enable' => NULL,
    'cate' => '1:delivery',
    'title' => 'Will my parcel be charged customs charges?',
    'content' => NULL,
    'image' => NULL,
    'manager' => NULL,
    'pos' => 1,
  ),
  3 => 
  array (
    'id' => 4,
    'created_at' => '2024-10-02 11:03:48',
    'updated_at' => '2024-10-02 11:13:43',
    'enable' => NULL,
    'cate' => '1:delivery',
    'title' => 'Do you offer international delivery?',
    'content' => NULL,
    'image' => NULL,
    'manager' => NULL,
    'pos' => 1,
  ),
  4 => 
  array (
    'id' => 5,
    'created_at' => '2024-10-02 11:04:12',
    'updated_at' => '2024-10-02 11:13:50',
    'enable' => NULL,
    'cate' => '1:delivery',
    'title' => 'Why does my statement have a recurring charge?',
    'content' => NULL,
    'image' => NULL,
    'manager' => NULL,
    'pos' => 1,
  ),
  5 => 
  array (
    'id' => 6,
    'created_at' => '2024-10-02 11:14:22',
    'updated_at' => '2024-10-02 11:14:22',
    'enable' => NULL,
    'cate' => '2:returns',
    'title' => 'What is your returns policy?',
    'content' => NULL,
    'image' => NULL,
    'manager' => NULL,
    'pos' => 1,
  ),
  6 => 
  array (
    'id' => 7,
    'created_at' => '2024-10-02 11:16:32',
    'updated_at' => '2024-10-02 11:16:32',
    'enable' => NULL,
    'cate' => '2:returns',
    'title' => 'I paid with Afterpay, how do returns work?',
    'content' => NULL,
    'image' => NULL,
    'manager' => NULL,
    'pos' => 1,
  ),
  7 => 
  array (
    'id' => 8,
    'created_at' => '2024-10-02 11:16:55',
    'updated_at' => '2024-10-02 11:16:55',
    'enable' => NULL,
    'cate' => '2:returns',
    'title' => 'What happens to my refund if I return 45 days?',
    'content' => NULL,
    'image' => NULL,
    'manager' => NULL,
    'pos' => 1,
  ),
  8 => 
  array (
    'id' => 9,
    'created_at' => '2024-10-02 11:17:08',
    'updated_at' => '2024-10-02 11:17:08',
    'enable' => NULL,
    'cate' => '2:returns',
    'title' => 'How do I return something to you?',
    'content' => NULL,
    'image' => NULL,
    'manager' => NULL,
    'pos' => 1,
  ),
  9 => 
  array (
    'id' => 10,
    'created_at' => '2024-10-02 11:17:24',
    'updated_at' => '2024-10-02 11:17:24',
    'enable' => NULL,
    'cate' => '2:returns',
    'title' => 'Can I return an exchange instead of a refund?',
    'content' => NULL,
    'image' => NULL,
    'manager' => NULL,
    'pos' => 1,
  ),
  10 => 
  array (
    'id' => 11,
    'created_at' => '2024-10-02 11:18:36',
    'updated_at' => '2024-10-02 11:18:36',
    'enable' => NULL,
    'cate' => '3:payment',
    'title' => 'How do I place an order?',
    'content' => NULL,
    'image' => NULL,
    'manager' => NULL,
    'pos' => 1,
  ),
  11 => 
  array (
    'id' => 12,
    'created_at' => '2024-10-02 11:18:59',
    'updated_at' => '2024-10-02 11:18:59',
    'enable' => NULL,
    'cate' => '3:payment',
    'title' => 'My payment was declined, what should I do?',
    'content' => NULL,
    'image' => NULL,
    'manager' => NULL,
    'pos' => 1,
  ),
  12 => 
  array (
    'id' => 13,
    'created_at' => '2024-10-02 11:19:12',
    'updated_at' => '2024-10-02 11:19:12',
    'enable' => NULL,
    'cate' => '3:payment',
    'title' => 'When will I be charged for my order?',
    'content' => NULL,
    'image' => NULL,
    'manager' => NULL,
    'pos' => 1,
  ),
  13 => 
  array (
    'id' => 14,
    'created_at' => '2024-10-02 11:19:27',
    'updated_at' => '2024-10-02 11:19:27',
    'enable' => NULL,
    'cate' => '3:payment',
    'title' => 'How do I pay using Google Pay?',
    'content' => NULL,
    'image' => NULL,
    'manager' => NULL,
    'pos' => 1,
  ),
  14 => 
  array (
    'id' => 15,
    'created_at' => '2024-10-02 11:19:45',
    'updated_at' => '2024-10-02 11:19:45',
    'enable' => NULL,
    'cate' => '3:payment',
    'title' => 'How do I use my Gift Voucher to pay for an order?',
    'content' => NULL,
    'image' => NULL,
    'manager' => NULL,
    'pos' => 1,
  ),
  15 => 
  array (
    'id' => 16,
    'created_at' => '2024-10-02 11:20:43',
    'updated_at' => '2024-10-02 11:20:43',
    'enable' => NULL,
    'cate' => '5:products',
    'title' => 'Where can I find your size guide?',
    'content' => NULL,
    'image' => NULL,
    'manager' => NULL,
    'pos' => 1,
  ),
  16 => 
  array (
    'id' => 17,
    'created_at' => '2024-10-02 11:20:55',
    'updated_at' => '2024-10-02 11:20:55',
    'enable' => NULL,
    'cate' => '5:products',
    'title' => 'Where can I find your care instructions?',
    'content' => NULL,
    'image' => NULL,
    'manager' => NULL,
    'pos' => 1,
  ),
  17 => 
  array (
    'id' => 18,
    'created_at' => '2024-10-02 11:21:07',
    'updated_at' => '2024-10-02 11:21:07',
    'enable' => NULL,
    'cate' => '5:products',
    'title' => 'Can you tell me more about Collusion?',
    'content' => NULL,
    'image' => NULL,
    'manager' => NULL,
    'pos' => 1,
  ),
  18 => 
  array (
    'id' => 19,
    'created_at' => '2024-10-02 11:21:19',
    'updated_at' => '2024-10-02 11:21:19',
    'enable' => NULL,
    'cate' => '5:products',
    'title' => 'How do I change my Fit Assistant Information?',
    'content' => NULL,
    'image' => NULL,
    'manager' => NULL,
    'pos' => 1,
  ),
  19 => 
  array (
    'id' => 20,
    'created_at' => '2024-10-02 11:21:30',
    'updated_at' => '2024-10-02 11:21:30',
    'enable' => NULL,
    'cate' => '5:products',
    'title' => 'What are your adhesive product guidelines?',
    'content' => NULL,
    'image' => NULL,
    'manager' => NULL,
    'pos' => 1,
  ),
  20 => 
  array (
    'id' => 21,
    'created_at' => '2024-10-02 11:22:27',
    'updated_at' => '2024-10-02 11:22:27',
    'enable' => NULL,
    'cate' => '4:order',
    'title' => 'Can I amend my order after I\'ve placed it?',
    'content' => NULL,
    'image' => NULL,
    'manager' => NULL,
    'pos' => 1,
  ),
  21 => 
  array (
    'id' => 22,
    'created_at' => '2024-10-02 11:22:46',
    'updated_at' => '2024-10-02 11:22:46',
    'enable' => NULL,
    'cate' => '4:order',
    'title' => 'I\'ve received a faulty item, what should I do?',
    'content' => NULL,
    'image' => NULL,
    'manager' => NULL,
    'pos' => 1,
  ),
  22 => 
  array (
    'id' => 23,
    'created_at' => '2024-10-02 11:23:10',
    'updated_at' => '2024-10-02 11:23:10',
    'enable' => NULL,
    'cate' => '4:order',
    'title' => 'I\'ve received an incorrect item, what do I do?',
    'content' => NULL,
    'image' => NULL,
    'manager' => NULL,
    'pos' => 1,
  ),
  23 => 
  array (
    'id' => 24,
    'created_at' => '2024-10-02 11:23:29',
    'updated_at' => '2024-10-02 11:23:29',
    'enable' => NULL,
    'cate' => '4:order',
    'title' => 'I\'ve bought a gift voucher, can I cancel or return it?',
    'content' => NULL,
    'image' => NULL,
    'manager' => NULL,
    'pos' => 1,
  ),
  24 => 
  array (
    'id' => 25,
    'created_at' => '2024-10-02 11:23:41',
    'updated_at' => '2024-10-02 11:23:41',
    'enable' => NULL,
    'cate' => '4:order',
    'title' => 'What if isn\'t right on my customs invoice?',
    'content' => NULL,
    'image' => NULL,
    'manager' => NULL,
    'pos' => 1,
  ),
  25 => 
  array (
    'id' => 26,
    'created_at' => '2024-10-02 11:24:16',
    'updated_at' => '2024-10-02 11:24:16',
    'enable' => NULL,
    'cate' => '6:managing',
    'title' => 'How do I create an account?',
    'content' => NULL,
    'image' => NULL,
    'manager' => NULL,
    'pos' => 1,
  ),
  26 => 
  array (
    'id' => 27,
    'created_at' => '2024-10-02 11:24:28',
    'updated_at' => '2024-10-02 11:24:28',
    'enable' => NULL,
    'cate' => '6:managing',
    'title' => 'I\'m having trouble signing into my account.',
    'content' => NULL,
    'image' => NULL,
    'manager' => NULL,
    'pos' => 1,
  ),
  27 => 
  array (
    'id' => 28,
    'created_at' => '2024-10-02 11:24:42',
    'updated_at' => '2024-10-02 11:24:42',
    'enable' => NULL,
    'cate' => '6:managing',
    'title' => 'I\'m having problems using your App.',
    'content' => NULL,
    'image' => NULL,
    'manager' => NULL,
    'pos' => 1,
  ),
  28 => 
  array (
    'id' => 29,
    'created_at' => '2024-10-02 11:25:03',
    'updated_at' => '2024-10-02 11:25:03',
    'enable' => NULL,
    'cate' => '6:managing',
    'title' => 'Do I need to create an account to shop with you?',
    'content' => NULL,
    'image' => NULL,
    'manager' => NULL,
    'pos' => 1,
  ),
  29 => 
  array (
    'id' => 30,
    'created_at' => '2024-10-02 11:25:23',
    'updated_at' => '2024-10-02 11:25:23',
    'enable' => NULL,
    'cate' => '6:managing',
    'title' => 'I\'d like to delete my account what should I do?',
    'content' => NULL,
    'image' => NULL,
    'manager' => NULL,
    'pos' => 1,
  ),
  30 => 
  array (
    'id' => 32,
    'created_at' => '2024-10-03 07:44:00',
    'updated_at' => '2024-10-03 07:54:47',
    'enable' => NULL,
    'cate' => '9:aaa',
    'title' => 'dafasdf222',
    'content' => '## 1234
fdasdfasdfasdfasdf
aaaaaa
bbb
ccc',
    'image' => NULL,
    'manager' => NULL,
    'pos' => 1,
  ),
));
    }
}
