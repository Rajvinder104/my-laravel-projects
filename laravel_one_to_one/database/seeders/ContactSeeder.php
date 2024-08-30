<?php

namespace Database\Seeders;

use App\Models\contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = collect([
            [
                'email' => 'rajvinder@gamil.com',
                'phone' => 628429845,
                'city' => 'Muktsar',
                'student_id' => 1,
            ],
            [
                'email' => 'mehak@gamil.com',
                'phone' => 9785452524,
                'city' => 'bathinda',
                'student_id' => 2,

            ],
            [
                'email' => 'yuvneet@gamil.com',
                'phone' => 75561326518,
                'city' => 'rattatibba',
                'student_id' => 3,

            ],
            [
                'email' => 'sukh@gamil.com',
                'phone' => 8535612126,
                'city' => 'malout',
                'student_id' => 4,

            ],
            [
                'email' => 'mannat@gamil.com',
                'phone' => 669544123,
                'city' => 'mohali',
                'student_id' => 5,

            ],
        ]);

        $students->each(function($student){
          contact::insert($student); 
        });
    }
}
