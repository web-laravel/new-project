<?php

use Illuminate\Database\Seeder;

class ProductDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            [
                'prod_color' => 'Trắng',
                'prod_size' => 'm2',
                'prod_price' => '900000',
                'prod_image' => 'abc.jpg',
                'prod_id' => 2
            ],
            [
                'prod_color' => 'xám',
                'prod_size' => 'm2',
                'prod_price' => '900000',
                'prod_image' => 'abc.jpg',
                'prod_id' => 2
            ],
            [
                'prod_color' => 'cafe',
                'prod_size' => 'm2',
                'prod_price' => '900000',
                'prod_image' => 'abc.jpg',
                'prod_id' => 2
            ],
            [
                'prod_color' => 'cafe',
                'prod_size' => 'm2',
                'prod_price' => '900000',
                'prod_image' => 'cafe.jpg',
                'prod_id' => 1
            ],
            [
                'prod_color' => 'cafe',
                'prod_size' => 'm2',
                'prod_price' => '900000',
                'prod_image' => 'cafe.jpg',
                'prod_id' => 3
            ],
            [
                'prod_color' => 'cafe',
                'prod_size' => 'm2',
                'prod_price' => '900000',
                'prod_image' => 'cafe.jpg',
                'prod_id' => 8
            ],
            [
                'prod_color' => 'cafe',
                'prod_size' => 'm2',
                'prod_price' => '900000',
                'prod_image' => 'cafe.jpg',
                'prod_id' => 7
            ],
            [
                'prod_color' => 'cafe',
                'prod_size' => 'm2',
                'prod_price' => '900000',
                'prod_image' => 'cafe.jpg',
                'prod_id' => 6
            ],
            [
                'prod_color' => 'xám',
                'prod_size' => 'm2',
                'prod_price' => '900000',
                'prod_image' => 'grey.jpg',
                'prod_id' => 1
            ],
            [
                'prod_color' => 'xám',
                'prod_size' => 'm2',
                'prod_price' => '900000',
                'prod_image' => 'grey.jpg',
                'prod_id' => 3
            ],
            [
                'prod_color' => 'xám',
                'prod_size' => 'm2',
                'prod_price' => '900000',
                'prod_image' => 'grey.jpg',
                'prod_id' => 4
            ],
            [
                'prod_color' => 'xám',
                'prod_size' => 'm2',
                'prod_price' => '900000',
                'prod_image' => 'grey.jpg',
                'prod_id' => 7
            ],
            [
                'prod_color' => 'xám',
                'prod_size' => 'm2',
                'prod_price' => '900000',
                'prod_image' => 'grey.jpg',
                'prod_id' => 6
            ],
            [
                'prod_color' => 'xám',
                'prod_size' => 'm2',
                'prod_price' => '900000',
                'prod_image' => 'grey.jpg',
                'prod_id' => 5
            ],
            [
                'prod_color' => 'trắng',
                'prod_size' => 'm2',
                'prod_price' => '900000',
                'prod_image' => 'while.jpg',
                'prod_id' => 1
            ],
            [
                'prod_color' => 'trắng',
                'prod_size' => 'm2',
                'prod_price' => '900000',
                'prod_image' => 'while.jpg',
                'prod_id' => 3
            ],
            [
                'prod_color' => 'trắng',
                'prod_size' => 'm2',
                'prod_price' => '900000',
                'prod_image' => 'while.jpg',
                'prod_id' => 4
            ],
            [
                'prod_color' => 'trắng',
                'prod_size' => 'm2',
                'prod_price' => '900000',
                'prod_image' => 'while.jpg',
                'prod_id' => 8
            ],
            [
                'prod_color' => 'trắng',
                'prod_size' => 'm2',
                'prod_price' => '900000',
                'prod_image' => 'while.jpg',
                'prod_id' => 7
            ],
            [
                'prod_color' => 'trắng',
                'prod_size' => 'm2',
                'prod_price' => '900000',
                'prod_image' => 'while.jpg',
                'prod_id' => 5
            ],
        ];
        DB::table('sgwd_product-detail')->insert($data);
    }
}
