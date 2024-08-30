<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = collect([
            [
                'name' => 'rajvinder',
                'email' => 'rajvinder@gmail.com',
                'password' => '123',
                'age' => '21',
                'role' => 'admin',
            ],
            [
                'name' => 'harpreet',
                'email' => 'harpreet@gmail.com',
                'password' => '123',
                'age' => '17',
                'role' => 'auther',
            ],
            [
                'name' => 'gurwinder',
                'email' => 'gurwinder@gmail.com',
                'password' => '123',
                'age' => '24',
                'role' => 'auther',
            ],

        ]);

        $user->each(
            function ($query) {
                User::insert($query);
            }
        );
    }
}
