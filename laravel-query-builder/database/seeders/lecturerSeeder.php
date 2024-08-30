<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\lecturer;

class lecturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lecturers = collect([
            [
                'name' => 'rajvinder',
                'email' => 'rajvinder@gmail.com',
                'age' => 23,
                'city' => 1
            ],
            [
                'name' => 'gorav',
                'email' => 'gorav@gmail.com',
                'age' => 14,
                'city' => 5
            ],
            [
                'name' => 'kamal',
                'email' => 'kamal@gmail.com',
                'age' => 19,
                'city' => 2
            ],
            [
                'name' => 'sonu',
                'email' => 'sonu@gmail.com',
                'age' => 28,
                'city' => 4
            ],
            [
                'name' => 'mehak',
                'email' => 'mehak@gmail.com',
                'age' => 22,
                'city' => 3
            ],

        ]);

        $lecturers->each(function ($lecturer) {
            lecturer::insert($lecturer);
        });
    }
}
