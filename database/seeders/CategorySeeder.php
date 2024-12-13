<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\category; // Pastikan model Category diimpor

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data kategori cafe
        Category::create([
            'name' => 'Minuman',
            'description' => 'Berbagai jenis minuman seperti kopi, teh, dan jus.',
        ]);

        Category::create([
            'name' => 'Makanan',
            'description' => 'Berbagai jenis makanan seperti roti, kue, dan pastry.',
        ]);

        Category::create([
            'name' => 'Dessert',
            'description' => 'Makanan penutup manis seperti es krim dan pudding.',
        ]);

        Category::create([
            'name' => 'Snack',
            'description' => 'Camilan ringan seperti keripik dan cookies.',
        ]);
    }
}