@extends('layouts.app')

@section('content')

<!-- Header & Tombol Tambah -->
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold mb-0">Katalog Produk</h2>
    <a href="/create-product" class="btn btn-dark">
        <i class="bi bi-plus-lg"></i> Tambah Produk
    </a>
</div>

<hr class="mb-5">

<!-- KATALOG PRODUK DINAMIS (Dari Database) -->
<div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
    
    @foreach ($productList as $prod)
    <div class="col mb-5">
        <div class="card h-100 shadow-sm border-0">
            <!-- Badge Kategori -->
            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">
                {{ $prod->category }}
            </div>
            
            <!-- Gambar Produk -->
            <img class="card-img-top" src="{{ $prod->image }}" alt="Gambar Produk" style="height: 200px; object-fit: cover;" />
            
            <!-- Detail Produk -->
            <div class="card-body p-4 text-center">
                <h5 class="fw-bolder">{{ $prod->name }}</h5>
                <span class="text-danger fw-bold">{{ $prod->price }}</span>
                <!-- Menggunakan fungsi bawaan Laravel (Str::limit) untuk memotong deskripsi panjang -->
                <p class="text-muted small mt-2">{{ Str::limit($prod->description, 50) }}</p>
            </div>
            
            <!-- Tombol Aksi (Edit & Delete) -->
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                <div class="d-flex justify-content-center gap-2">
                    <a href="/edit-product/{{ $prod->id }}" class="btn btn-sm btn-outline-primary">
                        <i class="bi bi-pencil"></i> Edit
                    </a>
                    
                    <form action="/delete-product/{{ $prod->id }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus produk ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-outline-danger">
                            <i class="bi bi-trash"></i> Hapus
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach

</div>

@endsection