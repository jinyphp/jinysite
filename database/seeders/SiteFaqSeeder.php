<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiteFaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('site_faq')->insert(array (
  0 => 
  array (
    'id' => 1,
    'created_at' => '2024-08-06 05:20:34',
    'updated_at' => '2024-08-06 05:20:34',
    'enable' => NULL,
    'cate' => NULL,
    'question' => 'What payment methods do you accept?',
    'answer' => 'We offer a range of secure payment options to provide you with 
              flexibility and convenience. Accepted methods include major credit/debit 
              cards, PayPal, and other secure online payment gateways. 
              
              You can find the complete list of accepted payment methods 
              during the checkout process.',
    'image' => NULL,
    'manager' => NULL,
    'pos' => 1,
  ),
  1 => 
  array (
    'id' => 2,
    'created_at' => '2024-08-06 05:24:32',
    'updated_at' => '2024-08-06 05:24:32',
    'enable' => NULL,
    'cate' => NULL,
    'question' => 'Do you ship internationally?',
    'answer' => 'Yes, we proudly offer international shipping to cater to our global customer base. Shipping costs and delivery times will be automatically calculated at the checkout based on your selected destination. Please note that any customs duties or taxes applicable in your country are the responsibility of the customer.',
    'image' => NULL,
    'manager' => NULL,
    'pos' => 1,
  ),
  2 => 
  array (
    'id' => 3,
    'created_at' => '2024-08-06 05:25:15',
    'updated_at' => '2024-08-06 05:25:15',
    'enable' => NULL,
    'cate' => NULL,
    'question' => 'Do I need an account to place an order?',
    'answer' => 'While you can place an order as a guest, creating an account comes with added benefits. By having an account, you can easily track your orders, manage your preferences, and enjoy a quicker checkout process for future purchases. It also allows us to provide you with personalized recommendations and exclusive offers.',
    'image' => NULL,
    'manager' => NULL,
    'pos' => 1,
  ),
  3 => 
  array (
    'id' => 4,
    'created_at' => '2024-08-06 05:25:40',
    'updated_at' => '2024-08-06 05:25:40',
    'enable' => NULL,
    'cate' => NULL,
    'question' => 'How can I track my order?',
    'answer' => 'Once your order is dispatched, you will receive a confirmation email containing a unique tracking number. You can use this tracking number on our website to monitor the real-time status of your shipment. Additionally, logging into your account will grant you access to a comprehensive order history, including tracking information.',
    'image' => NULL,
    'manager' => NULL,
    'pos' => 1,
  ),
  4 => 
  array (
    'id' => 5,
    'created_at' => '2024-08-06 05:26:04',
    'updated_at' => '2024-08-06 05:26:04',
    'enable' => NULL,
    'cate' => NULL,
    'question' => 'What are the product refund conditions?',
    'answer' => 'Our refund policy is designed to ensure customer satisfaction. Details can be found in our [refund policy page](insert link). In essence, we accept returns within [insert number] days of receiving the product, provided it is in its original condition with all tags and packaging intact. Refunds are processed promptly once the returned item is inspected and approved.',
    'image' => NULL,
    'manager' => NULL,
    'pos' => 1,
  ),
  5 => 
  array (
    'id' => 6,
    'created_at' => '2024-08-06 05:26:47',
    'updated_at' => '2024-08-06 05:26:47',
    'enable' => NULL,
    'cate' => NULL,
    'question' => 'Where can I find your size guide?',
    'answer' => 'Our comprehensive size guide is conveniently located on each product page to assist you in choosing the right fit. Additionally, you can find the size guide in the main menu under "Size Guide." We recommend referring to these resources to ensure your selected items match your preferred sizing.',
    'image' => NULL,
    'manager' => NULL,
    'pos' => 1,
  ),
  6 => 
  array (
    'id' => 7,
    'created_at' => '2024-08-06 05:27:10',
    'updated_at' => '2024-08-06 05:27:10',
    'enable' => NULL,
    'cate' => NULL,
    'question' => 'Do I need to create an account to shop with you?',
    'answer' => 'While guest checkout is available for your convenience, creating an account enhances your overall shopping experience. With an account, you can easily track your order status, save multiple shipping addresses, and enjoy a streamlined checkout process. Moreover, account holders receive early access to promotions and exclusive offers. Signing up is quick and hassle-free!',
    'image' => NULL,
    'manager' => NULL,
    'pos' => 1,
  ),
  7 => 
  array (
    'id' => 8,
    'created_at' => '2024-08-06 05:27:32',
    'updated_at' => '2024-08-06 05:27:32',
    'enable' => NULL,
    'cate' => NULL,
    'question' => 'Is there a minimum order value for free shipping?',
    'answer' => 'Yes, we offer free shipping on orders exceeding $250. Orders below this threshold are subject to standard shipping fees, which will be displayed during the checkout process.',
    'image' => NULL,
    'manager' => NULL,
    'pos' => 1,
  ),
  8 => 
  array (
    'id' => 9,
    'created_at' => '2024-08-06 05:27:53',
    'updated_at' => '2024-10-03 17:56:03',
    'enable' => NULL,
    'cate' => '1:dsfsad',
    'question' => 'Can I modify or cancel my order after placing it?',
    'answer' => 'Once an order is confirmed, our system processes it promptly to ensure timely dispatch. Therefore, modifications or cancellations are challenging after this point. However, please contact our customer support as soon as possible, and we will do our best to assist you based on the order status.',
    'image' => NULL,
    'manager' => NULL,
    'pos' => 1,
  ),
));
    }
}
