<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // insert table category
        DB::table('categories')->insert([
            'categoryName' => 'alam'
        ]);
        DB::table('categories')->insert([
            'categoryName' => 'lautan'
        ]);
        DB::table('categories')->insert([
            'categoryName' => 'sepak bola'
        ]);
        DB::table('categories')->insert([
            'categoryName' => 'anime'
        ]);
        DB::table('categories')->insert([
            'categoryName' => 'cars'
        ]);
    }
}
