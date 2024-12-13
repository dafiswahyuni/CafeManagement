<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Espresso',
            'description' => 'Kopi hitam pekat dengan cita rasa kuat.',
            'price' => 15000,
            'category_id' => 1, // Pastikan ada kategori minuman dengan ID ini
            'image' => 'images/espresso.jpg',
            'is_available' => true,
        ]);

        Product::create([
            'name' => 'Cappuccino',
            'description' => 'Perpaduan espresso, susu, dan busa susu.',
            'price' => 20000,
            'category_id' => 1,
            'image' => 'images/cappuccino.jpg',
            'is_available' => true,
        ]);

        Product::create([
            'name' => 'Croissant',
            'description' => 'Roti lapis khas Perancis yang renyah.',
            'price' => 25000,
            'category_id' => 2, // Pastikan ada kategori makanan dengan ID ini
            'image' => 'images/croissant.jpg',
            'is_available' => true,
        ]);

        Product::create([
            'name' => 'Cheesecake',
            'description' => 'Kue keju lembut dengan lapisan biskuit.',
            'price' => 35000,
            'category_id' => 2,
            'image' => 'images/cheesecake.jpg',
            'is_available' => true,
        ]);

        Product::create([
            'name' => 'Matcha Latte',
            'description' => 'Minuman berbasis teh hijau dengan susu.',
            'price' => 22000,
            'category_id' => 1,
            'image' => 'images/matcha-latte.jpg',
            'is_available' => true,
        ]);
    }
}