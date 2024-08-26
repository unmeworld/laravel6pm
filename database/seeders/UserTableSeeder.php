<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User\User;

class UserTableSeeder extends Seeder
{

    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin123'),
                'gender' => 'male',
                'role' => 'admin',
                'image' => '',
            ],

            [
                'name' => 'Aashish',
                'email' => 'aashish@gmail.com',
                'password' => bcrypt('aashish123'),
                'gender' => 'female',
                'role' => 'user',
                'image' => '',
            ],
            [
                'name' => 'hari',
                'email' => 'hari@gmail.com',
                'password' => bcrypt('hari123'),
                'gender' => 'male',
                'role' => 'user',
                'image' => '',
            ],
        ];
        foreach ($users as $user) {
            $email = $user['email'];
            $userExits = User::where('email', '=', $email)->first();
            if (!$userExits) {
                User::create($user);
            }
        }
    }
}
