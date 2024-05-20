<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // category::create([
        //     'name' => 'Dooars',
        //     'created_at' => now()
        // ]);

        $categories = collect([
            [
                'name' => 'Dooars',
                'created_at' => now()
            ],
            [
                'name' => 'Darjeeling',
                'created_at' => now()
            ],
            [
                'name' => 'Kalimpong',
                'created_at' => now()
            ],
            [
                'name' => 'Sikkim',
                'created_at' => now()
            ],
            [
                'name' => 'Gangtok',
                'created_at' => now()
            ],
        ]);

        $categories->each(function ($category) {
            category::insert($category);
        });

        // for ($i = 1; $i <= 10; $i++) {
        //     category::create([
        //         'name'  => 'Demo Category ' . $i,
        //         'created_at' => now()
        //     ]);
        // }
    }
}
