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
        $users = collect([
            [
                'name' => 'rajvinder',
                'email' => 'rajvinder@gmail.com',
            ],
            [
                'name' => 'guri',
                'email' => 'guri@gmail.com',
            ],
            [
                'name' => 'kamal',
                'email' => 'kamal@gmail.com',
            ],
            [
                'name' => 'sonu',
                'email' => 'sonu@gmail.com',
            ],
            [
                'name' => 'manish',
                'email' => 'manish@gmail.com',
            ],
        ]);

        $users->each(function($query){
             User::insert($query);
        });
    }
}
