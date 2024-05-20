<?php

namespace Database\Seeders;

use App\Models\nightstay;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NightstaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $nighstays = collect([
        //     [
        //         'name' => ''
        //     ]
        // ])
        for ($i = 1; $i <= 10; $i++) {
            nightstay::create([
                'name' => 'nightstay ' . $i,
                'category_id' => $i,
                'created_at' => now()
            ]);
        }
    }
}
