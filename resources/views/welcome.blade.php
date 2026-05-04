@extends('layouts.app')

@section('content')
<!-- Hero Section: Sambutan Utama -->
<div class="row align-items-center py-5">
    <div class="col-lg-6 mb-4 mb-lg-0">
        <span class="badge bg-primary-subtle text-primary mb-3 px-3 py-2 rounded-pill fw-bold">Selamat Datang di ZenBlog</span>
        <h1 class="display-3 fw-bold mb-4">Ruang Berbagi Ide & Inspirasi Digital.</h1>
        <p class="lead text-secondary mb-4">
            Platform personal untuk mengeksplorasi teknologi, desain, dan pemikiran kreatif. Temukan berbagai artikel menarik seputar dunia IT yang ditulis untuk mendorong akurasi dan kejelasan intelektual.
        </p>
        <div class="d-flex gap-3 mt-4">
            <a href="/artikel" class="btn btn-primary btn-lg px-5 rounded-pill shadow">Jelajahi Artikel</a>
            <a href="/about" class="btn btn-outline-dark btn-lg px-5 rounded-pill">Kenali ZenBlog</a>
        </div>
    </div>
    <div class="col-lg-6 text-center">
        <!-- Ilustrasi Utama menggunakan URL dari Unsplash -->
        <img src="https://images.unsplash.com/photo-1499750310107-5fef28a66643?w=600&fit=crop" class="img-fluid rounded-4 shadow-lg" alt="Digital Writing Illustration">
    </div>
</div>

<!-- Section Highlight Kategori -->
<div class="row mt-5 pt-5 text-center g-4">
    <div class="col-md-4">
        <div class="p-4 bg-white rounded-4 shadow-sm h-100 border-0 card">
            <div class="mb-3 text-primary"><i class="bi bi-cpu fs-1"></i></div>
            <h5 class="fw-bold">Teknologi</h5>
            <p class="text-muted small">Wawasan mendalam mengenai framework, tools, dan bahasa pemrograman masa kini seperti Laravel dan Flutter.</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="p-4 bg-white rounded-4 shadow-sm h-100 border-0 card">
            <div class="mb-3 text-success"><i class="bi bi-palette fs-1"></i></div>
            <h5 class="fw-bold">Desain UI/UX</h5>
            <p class="text-muted small">Eksplorasi antarmuka yang indah dan pengalaman pengguna yang bermakna menggunakan Figma dan Canva.</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="p-4 bg-white rounded-4 shadow-sm h-100 border-0 card">
            <div class="mb-3 text-warning"><i class="bi bi-lightbulb fs-1"></i></div>
            <h5 class="fw-bold">Ide Kreatif</h5>
            <p class="text-muted small">Catatan inovatif dan solusi cerdas untuk tantangan di era digital melalui analisis yang kritis.</p>
        </div>
    </div>
</div>
@endsection