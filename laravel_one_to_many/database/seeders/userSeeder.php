<?php

namespace Database\Seeders;
use App\Models\user;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = collect([
            [
                'name' => 'rajvinder',
                'email' => 'rajvinder@gmail.com',
            ],
            [
                'name' => 'harpreet',
                'email' => 'harpreet@gmail.com',
            ],
            [
                'name' => 'mehak',
                'email' => 'mehak@gmail.com',
            ],
            [
                'name' => 'karan',
                'email' => 'karan@gmail.com',
            ],
            [
                'name' => 'vishal',
                'email' => 'vishal@gmail.com',
            ],
        ]);

        $users->each(function($user){
            user::insert($user);
        });
    }
}
