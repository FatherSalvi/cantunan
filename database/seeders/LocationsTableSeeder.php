<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $locations = [
            ['name' => 'Palma Hall (AS)'],
            ['name' => 'Lagmay Hall'],
            ['name' => 'Melchor Hall'],
            ['name' => "Vinzons Hall"],
            ['name' => 'SOLAIR'],
            ['name' => 'College of Human Kinetics'],
            ['name' => 'Quezon Hall'],
            ['name' => 'College of Fine Arts'],
            ['name' => 'Malcolm Hall'],
            ['name' => 'Sunken Garden'],
            ['name' => 'University Hotel'],
            ['name' => 'Acacia Dormitory'],
            ['name' => 'Centennial Dormitory'],
            ['name' => 'Ilang-Ilang Dormitory'],
            ['name' => 'Ipil Dormitory'],
            ['name' => 'Kalayaan Dormitory'],
            ['name' => 'Kamagong Dormitory'],
            ['name' => 'Sampaguita Dormitory'],
            ['name' => 'Sanggumay Dormitory'],
        ];
        DB::table('locations')->insert($locations);
    }
}
