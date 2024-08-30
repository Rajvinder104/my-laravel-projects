<?php

namespace Database\Seeders;

use App\Models\order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orders = collect([
            [
                'amount' => 2500,
                'customer_id' => 1,
            ],
            [
                'amount' => 1500,
                'customer_id' => 2,
            ],
            [
                'amount' => 1000,
                'customer_id' => 3,
            ],
            [
                'amount' => 2000,
                'customer_id' => 4,
            ],
            [
                'amount' => 3000,
                'customer_id' => 5,
            ],
            [
                'amount' => 1300,
                'customer_id' => 2,
            ],
            [
                'amount' => 2100,
                'customer_id' => 1,
            ],
            [
                'amount' => 2600,
                'customer_id' => 4,
            ],
            [
                'amount' => 5000,
                'customer_id' => 5,
            ],
            [
                'amount' => 3000,
                'customer_id' => 3,
            ],
            [
                'amount' => 4000,
                'customer_id' => 5,
            ],
            [
                'amount' => 1000,
                'customer_id' => 1,
            ],
            [
                'amount' => 1500,
                'customer_id' => 5,
            ],
            [
                'amount' => 1600,
                'customer_id' => 4,
            ],
        ]);

        $orders->each(function($query){
            order::insert($query);
        });
    }
}
