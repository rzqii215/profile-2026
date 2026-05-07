<?php

namespace Database\Seeders;

use App\Models\Name;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Name::firstOrCreate([
            'name'=>'rizqi',
        ]);
    }
}
