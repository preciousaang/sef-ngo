<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
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
                'username' => 'preciousaang',
                'password' => bcrypt('albert'),
                'name' => 'Precious Ibeagi',
                'email' => 'preciousaang@gmail.com'
            ]
        ]);
    }
}
