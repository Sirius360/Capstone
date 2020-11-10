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
            'name' => 'Man',
            'email'=> 'admin@gmail.com',
            'password' => Hash::make('12345678'),
            'role_id' => 1


            ]);
    }
}
