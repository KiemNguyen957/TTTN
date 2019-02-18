<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'fullname'=>'cs1',
                'email'=>'cs1@gmail.com',
                'password'=>bcrypt('123456'),
                'gender'=>'Nam',
                'phone'=>'01696778677',
            ],
            [
                'fullname'=>str_random(10),
                'email'=>'customer@gmail.com',
                'password'=>bcrypt('123456'),
                'gender'=>'Nữ',
                'phone'=>'01696778677',
            ]
        ]);
    }
}
