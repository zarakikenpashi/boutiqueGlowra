<?php

namespace Database\Seeders;


use App\Models\Products;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Lara Jutsu',
            'email' => 'larajutsu@example.com',
            'password'=> bcrypt('123.321A')
        ]);


        Products::factory(50)->create();
    }
}
