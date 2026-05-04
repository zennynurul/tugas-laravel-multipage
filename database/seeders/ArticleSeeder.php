<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        $articles = [
            [
                "title" => "Masa Depan Kecerdasan Buatan dalam Pemrograman",
                "category" => "Teknologi",
                "image" => "https://images.unsplash.com/photo-1620712943543-bcc4688e7485?w=600&fit=crop",
                "description" => "AI bukan lagi ancaman bagi pemrogram, melainkan mitra kolaborasi. Di masa depan, kemampuan merancang arsitektur sistem akan jauh lebih berharga dibandingkan sekadar menghafal sintaks bahasa pemrograman. Kita sedang memasuki era di mana logika berpikir lebih mahal dari barisan kode."
            ],
            [
                "title" => "Minimalisme Digital: Fokus di Era Distraksi",
                "category" => "Gaya Hidup",
                "image" => "https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?w=600&fit=crop",
                "description" => "Notifikasi tanpa henti memecah konsentrasi kita. Dengan membatasi penggunaan media sosial dan menetapkan batas waktu layar, kita dapat mengembalikan fokus dan kreativitas yang hilang. Mari ciptakan ruang digital yang damai dan tidak mengikat."
            ],
            [
                "title" => "Mengapa UI/UX Designer Harus Mengerti Kode",
                "category" => "Desain",
                "image" => "https://images.unsplash.com/photo-1581291518857-4e27b48ff24e?w=600&fit=crop",
                "description" => "Desain yang indah tidak ada gunanya jika mustahil direalisasikan oleh pengembang front-end. Desainer yang memahami batasan CSS dan HTML akan menghasilkan antarmuka yang lebih aplikatif dan ramah terhadap performa sistem."
            ]
        ];

        foreach ($articles as $article) {
            Article::create($article);
        }
    }
}