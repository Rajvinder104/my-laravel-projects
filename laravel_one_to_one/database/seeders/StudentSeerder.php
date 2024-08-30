<?php

namespace Database\Seeders;

use App\Models\student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeerder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = collect([
            [
                'name' => 'rajvinder',
                'age' => 22,
                'gender' => 'M',
            ],
            [
                'name' => 'mehak',
                'age' => 24,
                'gender' => 'M',
            ],
            [
                'name' => 'yuvneet',
                'age' => 18,
                'gender' => 'F',
            ],
            [
                'name' => 'sukh',
                'age' => 26,
                'gender' => 'M',
            ],
            [
                'name' => 'mannat',
                'age' => 23,
                'gender' => 'F',
            ],
        ]);

        $students->each(function($student){
          student::insert($student); 
        });
    }
}
