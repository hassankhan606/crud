<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Laptop',
            'description' => 'High-performance laptop for professionals',
            'price' => 999.99,
            'quantity' => 15,
            'category' => 'Electronics'
        ]);

        Product::create([
            'name' => 'Smartphone',
            'description' => 'Latest smartphone with advanced features',
            'price' => 699.99,
            'quantity' => 25,
            'category' => 'Electronics'
        ]);

        Product::create([
            'name' => 'Desk Chair',
            'description' => 'Ergonomic office chair',
            'price' => 199.99,
            'quantity' => 8,
            'category' => 'Furniture'
        ]);
    }
}