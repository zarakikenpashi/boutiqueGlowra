<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::factory()->create([
            'name' => 'parfun'
        ]);

        Category::factory()->create([
            'name' => 'maquillage'
        ]);

        Category::factory()->create([
            'name' => 'soin de visage'
        ]);

        Category::factory()->create([
            'name' => 'mèche'
        ]);

        Category::factory()->create([
            'name' => 'pérruque'
        ]);
    }
}
