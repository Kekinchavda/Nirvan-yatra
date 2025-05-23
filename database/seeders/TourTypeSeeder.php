<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TourTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tour_type')->insert([
            [
                'name' => 'Kedarnath yatra',
                'status' => "active",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'treks',
                'status' => "active",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Himalayan treks',
                'status' => "active",
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

    }
}
