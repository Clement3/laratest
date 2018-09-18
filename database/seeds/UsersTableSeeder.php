<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            DB::table('users')->insert([
                'name' => 'User'.$i,
                'email' => 'user'.$i.'@user.com',
                'password' => bcrypt('user'),
                'created_at' => Date('Y-m-d H:i:s')
            ]);
        }
    }
}
