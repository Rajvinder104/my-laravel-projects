<?php

namespace Database\Seeders;

use App\Models\student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = collect([
            [
                'name' => 'Rajviner',
                'age' => 22,
                'email' => 'rajviner@gmail.com',
                'phone' => '6521457444',
            ],
            [
                'name' => 'karan',
                'age' => 43,
                'email' => 'karan@gmail.com',
                'phone' => '358481564',
            ],
            [
                'name' => 'guri',
                'age' => 23,
                'email' => 'guri@gmail.com',
                'phone' => '24445118',
            ],
            [
                'name' => 'sukh',
                'age' => 32,
                'email' => 'sukh@gmail.com',
                'phone' => '9852652362',
            ],
            [
                'name' => 'kamal',
                'age' => 12,
                'email' => 'kamal@gmail.com',
                'phone' => '45865654894',
            ]
        ]);

        $students->each(function($student){
           student::insert($student);
        });
    }
}
