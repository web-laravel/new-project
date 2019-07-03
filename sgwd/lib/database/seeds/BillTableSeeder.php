<?php

use Illuminate\Database\Seeder;

class BillTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert data vào bảng Bill
        $data = [
            [
                'user_id' => 3,
                'bill_total_price' => 5000000,
                'bill_daytime_book' => '2019-06-27 15:30:00',
                'bill_daytime_shiping' => '2019-06-30 20:00:00',
                'bill_payment' => 2
            ]
        ];
        DB::table('sgwd_bills')->insert($data);
    }
}
