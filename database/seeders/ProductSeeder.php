<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'title' => 'Jacket',
            'description' => 'Given Jacket Description',
            'currency' => 'PHP',
            'price' => 1234.56,
            'brand' => 'KuyaWill',
            'category' => 'apparel',
            'image' => 'https://netstorage-kami.akamaized.net/images/0fgjhs1shmj74jpi4g.jpg?&imwidth=1200',
        ]);

        DB::table('products')->insert([
            'title' => 'First Title of a Book',
            'description' => 'A Book Description',
            'currency' => 'PHP',
            'price' => 777.05,
            'brand' => 'Book brand',
            'category' => 'book',
            'image' => 'https://edit.org/photos/images/cat/book-covers-big-2019101610.jpg-1300.jpg'
        ]);

        DB::table('products')->insert([
            'title' => 'MAC Book Pro',
            'description' => 'A Device Description',
            'currency' => 'PHP',
            'price' => 200000.00,
            'brand' => 'Apple',
            'category' => 'electronic device',
            'image' => 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/mbp-spacegray-select-202206?wid=904&hei=840&fmt=jpeg&qlt=90&.v=1653493200207'
        ]);
    }
}
