@extends('layouts.app')

@section('content')
<!-- Header Halaman Katalog -->
<div class="d-flex justify-content-between align-items-center mb-5 border-bottom pb-3">
    <div>
        <h2 class="fw-bold mb-1">Katalog Artikel</h2>
        <p class="text-muted">Eksplorasi pemikiran dan catatan teknis terbaru.</p>
    </div>
    <!-- Tombol Tambah Artikel (Opsional jika ingin ditaruh di sini juga) -->
    <a href="/create-article" class="btn btn-primary rounded-pill px-4 shadow-sm d-none d-md-block">
        <i class="bi bi-plus-lg"></i> Buat Artikel Baru
    </a>
</div>

<!-- Grid Artikel -->
<div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-4">
    @forelse ($articleList as $article)
    <div class="col">
        <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden card-hover">
            <!-- Gambar Sampul -->
            <div class="position-relative">
                <span class="badge bg-primary position-absolute top-0 start-0 m-3 shadow-sm px-3 py-2 rounded-pill small">
                    {{ $article->category }}
                </span>
                <img src="{{ $article->image }}" class="card-img-top" alt="{{ $article->title }}" style="height: 220px; object-fit: cover;">
            </div>
            
            <!-- Isi Card -->
            <div class="card-body p-4">
                <p class="text-muted small mb-2">
                    <i class="bi bi-calendar3"></i> {{ $article->created_at->format('d M Y') }}
                </p>
                <h5 class="card-title fw-bold mb-3">{{ $article->title }}</h5>
                <p class="card-text text-secondary small lh-base">
                    {{ Str::limit($article->description, 120) }}
                </p>
            </div>
            
            <!-- Footer Card & Link Detail -->
            <div class="card-footer bg-transparent border-0 p-4 pt-0 d-flex justify-content-between align-items-center">
                <!-- LINK BACA SELENGKAPNYA -->
                <a href="/artikel/{{ $article->id }}" class="text-primary fw-bold text-decoration-none small">
                    Baca Selengkapnya &rarr;
                </a>

                <!-- Aksi CRUD Cepat -->
                <div class="d-flex gap-2">
                    <a href="/edit-article/{{ $article->id }}" class="btn btn-light btn-sm rounded-circle shadow-sm" title="Edit">
                        <i class="bi bi-pencil text-secondary"></i>
                    </a>
                    <form action="/delete-article/{{ $article->id }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus artikel ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-light btn-sm rounded-circle shadow-sm" title="Hapus">
                            <i class="bi bi-trash text-danger"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @empty
    <!-- Tampilan Jika Data Kosong -->
    <div class="col-12 text-center py-5">
        <div class="mb-3">
            <i class="bi bi-journal-x display-1 text-muted"></i>
        </div>
        <h4 class="text-muted">Belum ada artikel yang dipublikasikan.</h4>
        <p class="text-secondary">Jadilah yang pertama untuk membagikan ide hari ini!</p>
        <a href="/create-article" class="btn btn-primary rounded-pill px-4 mt-2">Mulai Menulis</a>
    </div>
    @endforelse
</div>

<style>
    /* Efek Hover untuk Card agar lebih menarik */
    .card-hover {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .card-hover:hover {
        transform: translateY(-10px);
        box-shadow: 0 1rem 3rem rgba(0,0,0,.1) !important;
    }
</style>
@endsection