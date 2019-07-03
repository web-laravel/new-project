<?php

use Illuminate\Database\Seeder;

class AddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert data vào bảng address
        $data = [
            [
                'address' => '167 Lương Ngọc Quyến, phường 5, quận Gò Vấp, TP.HCM',
                'id' => 1
            ],
        ];
        DB::table('sgwd_address')->insert($data);
    }
}
