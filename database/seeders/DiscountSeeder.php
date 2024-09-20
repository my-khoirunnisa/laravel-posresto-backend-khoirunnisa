<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Discount::create([
            'name' => 'Grand Opening',
            'description' => 'Disc grand opening',
            'type' => 'percentage',
            'value' => 20,
            'status' => 'active',
            'expired_date' => '2024-10-21'
        ]);

        \App\Models\Discount::create([
            'name' => 'New Member',
            'description' => 'Disc new member',
            'type' => 'percentage',
            'value' => 10,
            'status' => 'active',
            'expired_date' => '2024-12-11'
        ]);

        \App\Models\Discount::create([
            'name' => 'Black Friday',
            'description' => 'Disc black friday',
            'type' => 'percentage',
            'value' => 5,
            'status' => 'active',
            'expired_date' => '2024-11-22'
        ]);
    }
}
