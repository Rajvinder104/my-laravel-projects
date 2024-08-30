<?php

namespace Database\Seeders;

use App\Models\student_role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentroleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $studentsroles = collect([
              [
                'user_id' => 1,
                'role_id' => 1,
              ],
              [
                'user_id' => 2,
                'role_id' => 2,
              ],
              [
                'user_id' => 3,
                'role_id' => 3,
              ],
              [
                'user_id' => 4,
                'role_id' => 4,
              ],
              [
                'user_id' => 5,
                'role_id' => 5,
              ],
        ]);
        $studentsroles->each(function($query){
            student_role::insert($query);
        });
    }
}
