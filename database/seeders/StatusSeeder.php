<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('status')->truncate();

        DB::table('status')->insert([
            ['id' => 0, 'name' => 'SUCCESS'],
            ['id' => 1, 'name' => 'FAILED'],
        ]);
    }
}
