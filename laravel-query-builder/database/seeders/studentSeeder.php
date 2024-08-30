<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;

class studentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = collect(
            [
                [
                    'name' => 'raju',
                    'email' => 'raju@gmail.com',
                    'age' => 33,
                    'city' => 1,
              
                ],
                [
                    'name' => 'mainsh',
                    'email' => 'mainsh@gmail.com',
                    'age' => 23,
                    'city' => 4,
              
                ],
                [
                    'name' => 'guri',
                    'email' => 'guri@gmail.com',
                    'age' => 33,
                    'city' => 2,
             
                ],
                [
                    'name' => 'karan',
                    'email' => 'karan@gmail.com',
                    'age' => 22,
                    'city' => 5,
             
                ],
                [
                    'name' => 'vishal',
                    'email' => 'vishal@gmail.com',
                    'age' => 24, 
                    'city' => 23,
             
                ],
                ]
        );

        $students->each(function($student) {
            student::insert($student);
        });
    }
}
