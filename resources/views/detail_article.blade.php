@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <!-- Tombol Kembali -->
        <a href="/artikel" class="btn btn-link text-decoration-none mb-4 p-0 text-dark">
            <i class="bi bi-arrow-left"></i> Kembali ke Katalog
        </a>

        <article>
            <!-- Header Artikel -->
            <header class="mb-4">
                <span class="badge bg-primary mb-2 px-3 py-2 rounded-pill">{{ $article->category }}</span>
                <h1 class="fw-bold display-5 mb-3">{{ $article->title }}</h1>
                <p class="text-muted small">
                    <i class="bi bi-calendar3"></i> Dipublikasikan pada {{ $article->created_at->format('d M Y') }}
                </p>
            </header>

            <!-- Gambar Utama -->
            <figure class="mb-5">
                <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}">
            </figure>

            <!-- Konten Artikel -->
            <section class="content lh-lg fs-5 text-secondary">
                {!! nl2br(e($article->description)) !!}
            </section>
        </article>

        <hr class="my-5">
        
        <!-- Footer Artikel -->
        <div class="d-flex justify-content-between align-items-center mb-5">
            <div class="share">
                <span class="small fw-bold text-muted me-2">BAGIKAN:</span>
                <button class="btn btn-light btn-sm rounded-circle"><i class="bi bi-facebook"></i></button>
                <button class="btn btn-light btn-sm rounded-circle"><i class="bi bi-twitter-x"></i></button>
            </div>
            <a href="/edit-article/{{ $article->id }}" class="btn btn-outline-secondary btn-sm">
                <i class="bi bi-pencil"></i> Edit Artikel Ini
            </a>
        </div>
    </div>
</div>
@endsection