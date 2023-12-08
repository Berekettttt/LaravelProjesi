<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        // Veri ekleme
        DB::table('products')->insert([
            'name' => "Khalil Mamoon",
            'price' => 1400,
            'description' => "Yüksek kaliteli el yapımı nargileler.Geleneksel Mısırlı tasarım ve işçilik.",
            'category' => "set",
            'gallery' => "https://khalilmamoon.com/cdn/shop/files/4366-Black.jpg?v=1684454245",
        ]);

        // Veri silme
        DB::table('products')->where('name', 'Khalil Mamoon')->delete();
        echo "Khalil Mamoon product deleted\n";

        // Veri güncelleme
        DB::table('products')->where('name', 'Khalil Mamoon')->update(['price' => 1500]);
        echo "Updated Price for Khalil Mamoon\n";

        // Verileri listeleme
        $products = DB::table('products')->get();
        echo "List of Products:\n";
        foreach ($products as $product) {
            echo "ID: $product->id, Name: $product->name, Price: $product->price, Category: $product->category\n";
        }
    }
}
