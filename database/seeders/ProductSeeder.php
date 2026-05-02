<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product; // Pastikan memanggil model Product

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        // Kumpulan data produk dummy
        $products = [
            [
                "name" => "Sepatu Sneakers Klasik",
                "price" => "Rp 450.000",
                "category" => "Sepatu",
                "image" => "https://images.unsplash.com/photo-1523381210434-271e8be1f52b?w=600&fit=crop",
                "description" => "Sepatu sneakers yang nyaman dipakai seharian dengan desain minimalis dan elegan. Cocok untuk kuliah maupun hangout."
            ],
            [
                "name" => "Jaket Denim Premium",
                "price" => "Rp 320.000",
                "category" => "Pakaian",
                "image" => "https://images.unsplash.com/photo-1576995853123-5a10305d93c0?w=600&fit=crop",
                "description" => "Jaket berbahan denim tebal dengan jahitan rapi. Memberikan kesan maskulin dan tangguh untuk pemakainya."
            ],
            [
                "name" => "Jam Tangan Minimalis",
                "price" => "Rp 185.000",
                "category" => "Aksesoris",
                "image" => "https://images.unsplash.com/photo-1524592094714-0f0654e20314?w=600&fit=crop",
                "description" => "Jam tangan dengan strap kulit sintetis dan dial polos yang elegan. Tahan cipratan air (water resistant)."
            ],
            [
                "name" => "Kaos Oversize Polos",
                "price" => "Rp 95.000",
                "category" => "Pakaian",
                "image" => "https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?w=600&fit=crop",
                "description" => "Kaos katun bambu super lembut dengan potongan oversize. Menyerap keringat dan anti-bakteri."
            ],
            [
                "name" => "Tas Ransel Kanvas",
                "price" => "Rp 210.000",
                "category" => "Aksesoris",
                "image" => "https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=600&fit=crop",
                "description" => "Tas ransel multifungsi dengan kompartemen laptop 15 inci. Cocok untuk kebutuhan akademik maupun traveling."
            ],
            [
                "name" => "Kemeja Flanel Kotak",
                "price" => "Rp 165.000",
                "category" => "Pakaian",
                "image" => "https://images.unsplash.com/photo-1598033129183-c4f50c736f10?w=600&fit=crop",
                "description" => "Kemeja flanel tebal namun tidak panas, dapat dijadikan kemeja utama maupun outer over-shirt yang trendy."
            ]
        ];

        // Looping untuk memasukkan setiap produk ke database menggunakan Eloquent
        foreach ($products as $prod) {
            Product::create($prod);
        }
    }
}