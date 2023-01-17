<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class User extends Seeder
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
                'id'=>1,
                'name'=>'Admin',
                'email'=>'admin@movielist.com',
                'password'=> bcrypt('admin1'),
                'phone'=>'081996200000',
                'role'=>'admin'
            ],
            [
                'id'=>2,
                'name'=>'Nevan',
                'email'=>'nevan@gmail.com',
                'password'=> bcrypt('nevan01'),
                'phone'=>'081912341234',
                'role'=>'user'
            ]
        ]);
    }
}
