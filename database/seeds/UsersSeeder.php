<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user ->name = 'user';
        $user ->email = 'user@example.com';
        $user ->password = bcrypt('user');
        $user ->save();
        $user->roles()->attach(1);

        $user = new User();
        $user ->name = 'user1';
        $user ->email = 'user1@example.com';
        $user ->password = bcrypt('user');
        $user ->save();
        $user->roles()->attach(2);

        $user = new User();
        $user ->name = 'user2';
        $user ->email = 'user2@example.com';
        $user ->password = bcrypt('user');
        $user ->save();
        $user->roles()->attach(3);

        $user = new User();
        $user ->name = 'user3';
        $user ->email = 'user3@example.com';
        $user ->password = bcrypt('user');
        $user ->save();
        $user->roles()->attach(2);
    }
}
