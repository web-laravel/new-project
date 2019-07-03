<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert data vào bảng Role
        $data = [
            [
                'role' => 'admin'
            ],
            [
                'role' => 'admin Hà Nội'
            ],
            [
                'role' => 'admin Hải Phòng'
            ],
            [
                'role' => 'Đại lý Ninh Bình'
            ],
            [
                'role' => 'users'
            ],
        ];
        DB::table('sgwd_roles')->insert($data);
    }
}
