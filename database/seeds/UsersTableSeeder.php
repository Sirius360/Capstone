<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'full_name' => 'Nguyễn Đức Mận',
            'email'=> 'admin@gmail.com',
            'password' => bcrypt('secret'),
            'role_id' => 1


        ]);
    }
}
