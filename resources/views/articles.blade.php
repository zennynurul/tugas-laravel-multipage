@extends('layouts.main')

@section('content')
<section class="container py-5">
    <h2 class="text-center mb-5 fw-bold">Kumpulan Artikel</h2>
    <div class="row g-4">
        
        @php
            $judulArtikel = ["Belajar HTML", "CSS Dasar", "Bootstrap 5", "PHP untuk Pemula", "Konsep Laravel", "Database MySQL"];
        @endphp

        @for ($i = 0; $i < 6; $i++)
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100 rounded-3">
                <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=600&h=400&fit=crop&sig={{ $i }}" class="card-img-top" alt="Cover">
                <div class="card-body p-4 d-flex flex-column">
                    <h5 class="card-title fw-bold">{{ $judulArtikel[$i] }}</h5>
                    <p class="card-text text-secondary mb-4">Ini adalah deskripsi singkat untuk artikel {{ $judulArtikel[$i] }}.</p>
                    <a href="#" class="btn btn-dark rounded-pill mt-auto align-self-start">Read More</a>
                </div>
            </div>
        </div>
        @endfor

    </div>
</section>
@endsection