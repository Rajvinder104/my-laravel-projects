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
            'name' => 'rajvinder',
            'email' => 'rajvinder@gmail.com',
        ],
        [
            'name' => 'gurpreet',
            'email' => 'gurpreet@gmail.com',
        ],
        [
            'name' => 'sukhi',
            'email' => 'sukhi@gmail.com',
        ],
        [
            'name' => 'manish',
            'email' => 'manish@gmail.com',
        ],
        [
            'name' => 'vishal',
            'email' => 'vishal@gmail.com',
        ],
       ]); 

       $students->each(function($query){
           student::insert($query);
       });
    }
}
