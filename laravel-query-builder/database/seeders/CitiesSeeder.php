<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\citie;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = collect(
            [
                [
                    'cities' => 'muktsar'
                ],
                [
                    'cities' => 'bathinda'
                ],
                [
                    'cities' => 'abohar'
                ],
                [
                    'cities' => 'mohali'
                ],
                [
                    'cities' => 'chandighar'
                ]
            ]
        );
        $cities->each(function($city){
            citie::insert($city);
        });

    }
}
