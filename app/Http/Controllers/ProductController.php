<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // 1. READ: Menampilkan semua produk di katalog
    public function index()
    {
        $products = Product::get();
        return view("products", ["productList" => $products]);
    }

    // 2. CREATE (View): Menampilkan halaman form kosong
    public function create()
    {
        return view("create_product");
    }

    // 3. CREATE (Action): Memproses data yang dikirim dari form ke database
    public function store(Request $request)
    {
        // 1. PROSES VALIDASI (Gerbang Keamanan)
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'price' => 'required',
            'category' => 'required',
            'image' => 'required|url', // Wajib diisi dan HARUS berupa link URL
            'description' => 'nullable' // Boleh dikosongkan
        ], [
            // Pesan error kustom (Opsional, tapi sangat baik untuk User Experience)
            'name.required' => 'Nama produk wajib diisi!',
            'price.required' => 'Harga tidak boleh kosong!',
            'category.required' => 'Tentukan kategori produk!',
            'image.required' => 'Link gambar wajib diisi!',
            'image.url' => 'Format gambar harus berupa link URL yang valid!'
        ]);
        
        // 2. Menyimpan ke database HANYA JIKA validasi di atas lolos
        Product::create($validatedData);

        // Setelah tersimpan, lemparkan user ke halaman katalog
        return redirect('/products');
    }

    // 4. UPDATE (View): Menampilkan halaman form yang sudah terisi data produk lama
    public function edit($id)
    {
        $product = Product::where("id", $id)->first();
        return view("edit_product", compact("product"));
    }

    // 5. UPDATE (Action): Memproses data editan untuk menimpa data lama di database
    public function update(Request $request, $id)
    {
        $product = Product::where("id", $id)->first();

        // Mengubah data satu per satu
        $product->name = $request->name;
        $product->price = $request->price;
        $product->category = $request->category;
        $product->image = $request->image;
        $product->description = $request->description;
        $product->save();

        // Setelah diupdate, lemparkan user ke halaman katalog
        return redirect("/products");
    }

    // 6. DELETE (Action): Menghapus data dari database
    public function destroy($id)
    {
        Product::where("id", $id)->delete();
        
        // Kembali ke halaman saat ini (katalog) setelah data terhapus
        return redirect()->back();
    }
}