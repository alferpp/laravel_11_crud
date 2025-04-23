<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => Hash::make('password'),
        ]);

        // Create sample products
        Product::create([
            'code' => '334443344',
            'name' => 'USB Thumb Drives',
            'quantity' => 12,
            'price' => 950.00,
            'description' => 'High-speed USB thumb drives'
        ]);

        Product::create([
            'code' => '1220333',
            'name' => 'US Bond Paper',
            'quantity' => 20,
            'price' => 150.00,
            'description' => 'Premium quality US bond paper'
        ]);
    }
}
