<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert data vào bảng Users
        $data = [
            [
                'username' => 'admin',
                'password' => bcrypt('ngumoinoi'),
                'firstname' => 'Quang Đức',
                'lastname' => 'Nguyễn',
                'phone_number' => '0784456836',
                'email' => 'quangduc280497@gmail.com',
                'tick' => 0
            ],
            [
                'username' => 'trungnguyen',
                'password' => bcrypt('ngumoinoi'),
                'firstname' => 'Văn Trung',
                'lastname' => 'Nguyễn',
                'phone_number' => '1234567890',
                'email' => 'trung@gmail.com',
                'tick' => 0
            ],
            [
                'username' => 'lamcao',
                'password' => bcrypt('ngumoinoi'),
                'firstname' => 'Sơn Lâm',
                'lastname' => 'Cao Nguyễn',
                'phone_number' => '0987654321',
                'email' => 'lam@gmail.com',
                'tick' => 0
            ],
            [
                'username' => 'phuocphan',
                'password' => bcrypt('ngumoinoi'),
                'firstname' => 'Quang Phước',
                'lastname' => 'Phan',
                'phone_number' => '5643782190',
                'email' => 'phuoc@gmail.com',
                'tick' => 0
            ],
        ];
        DB::table('sgwd_users')->insert($data);
    }
}
