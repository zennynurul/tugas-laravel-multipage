@extends('layouts.app')

@section('content')
<div class="row justify-content-center text-center">
    <div class="col-lg-8">
        <h1 class="fw-bold mb-4">Mengapa ZenBlog Ada?</h1>
        <p class="fs-5 text-secondary lh-lg mb-5">
            Di tengah derasnya arus informasi, kami percaya bahwa tulisan yang berkualitas tetap memiliki tempat spesial untuk menginspirasi perubahan dan menyebarkan pengetahuan.
        </p>
    </div>
</div>

<div class="row g-4 mt-2">
    <div class="col-md-4">
        <div class="card h-100 border-0 shadow-sm p-4 text-center rounded-4">
            <i class="bi bi-lightbulb fs-1 text-warning mb-3"></i>
            <h5 class="fw-bold">Edukasi</h5>
            <p class="text-muted">Menyederhanakan konsep teknologi yang kompleks menjadi bacaan yang ringan.</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card h-100 border-0 shadow-sm p-4 text-center rounded-4">
            <i class="bi bi-chat-heart fs-1 text-danger mb-3"></i>
            <h5 class="fw-bold">Inspirasi</h5>
            <p class="text-muted">Berbagi pengalaman personal untuk memotivasi sesama pembelajar digital.</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card h-100 border-0 shadow-sm p-4 text-center rounded-4">
            <i class="bi bi-globe fs-1 text-primary mb-3"></i>
            <h5 class="fw-bold">Komunitas</h5>
            <p class="text-muted">Membangun wadah diskusi sehat untuk perkembangan ekosistem IT.</p>
        </div>
    </div>
</div>
@endsection