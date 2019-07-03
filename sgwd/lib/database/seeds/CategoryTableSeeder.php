<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert data vào bảng Categories
        $data = [
            [
                'cate_name' => 'Cửa xếp'
            ],
            [
                'cate_name' => 'Cửa lùa'
            ],
            [
                'cate_name' => 'Cửa xích'
            ],
            [
                'cate_name' => 'Cửa fix'
            ],
            [
                'cate_name' => 'Cửa cuốn'
            ],
        ];
        DB::table('sgwd_categories')->insert($data);
    }
}
