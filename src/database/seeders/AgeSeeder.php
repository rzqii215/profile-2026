<?php

namespace Database\Seeders;

use App\Models\Age;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Age::firstOrCreate([
            'age'=>'20',
        ]);
    }
}
