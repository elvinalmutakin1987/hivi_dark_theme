<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ["sport_name" => "Padel"],
            ["sport_name" => "Tennis"],
            ["sport_name" => "Badminton"],
            ["sport_name" => "Mini Soccer"],
            ["sport_name" => "Sepak Bola"],
            ["sport_name" => "Basketball"],
            ["sport_name" => "Futsal"],
            ["sport_name" => "Tenis Meja"],
            ["sport_name" => "Squash"],
            ["sport_name" => "Volley"],
        ];

        DB::table('sports')->insert($data);
    }
}
