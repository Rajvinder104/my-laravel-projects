<?php

namespace Database\Seeders;

use App\Models\customer;
use App\Models\customers;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customers = collect([
            [
                'name' => 'rajvinder',
                'email' => 'rajvinder@gmail.com',
                'phone' => 8975548578,
            ],
            [
                'name' => 'harpreet',
                'email' => 'harpreet@gmail.com',
                'phone' => 9875548578,
            ],
            [
                'name' => 'karan',
                'email' => 'karan@gmail.com',
                'phone' => 6275548578,
            ],
            [
                'name' => 'kamal',
                'email' => 'kamal@gmail.com',
                'phone' => 7875548578,
            ],
            [
                'name' => 'sukh',
                'email' => 'sukh@gmail.com',
                'phone' => 975548500,
            ],
        ]);

        $customers->each(function($query){
            customer::insert($query);
        });
    }
}
