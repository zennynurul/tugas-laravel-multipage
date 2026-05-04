@extends('layouts.app')

@section('content')
<div class="row justify-content-center py-5">
    <div class="col-lg-6">
        <div class="card border-0 shadow-sm rounded-4 p-5">
            <h2 class="fw-bold mb-4 text-center">Hubungi Saya</h2>
            <p class="text-center text-muted mb-5">Punya pertanyaan atau ingin berkolaborasi? Kirimkan pesan di bawah ini.</p>
            
            <form action="#" method="POST">
                <div class="mb-3">
                    <label class="form-label fw-bold">Nama Lengkap</label>
                    <input type="text" class="form-control" placeholder="Masukkan nama Anda">
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Email</label>
                    <input type="email" class="form-control" placeholder="nama@email.com">
                </div>
                <div class="mb-4">
                    <label class="form-label fw-bold">Pesan</label>
                    <textarea class="form-control" rows="5" placeholder="Tuliskan pesan Anda..."></textarea>
                </div>
                <button type="button" class="btn btn-primary w-100 btn-lg rounded-pill fw-bold">Kirim Pesan</button>
            </form>
            
            <div class="mt-5 pt-4 border-top text-center">
                <p class="text-muted mb-3">Atau melalui media sosial:</p>
                <div class="d-flex justify-content-center gap-3">
                    <a href="#" class="btn btn-outline-dark rounded-circle"><i class="bi bi-github"></i></a>
                    <a href="#" class="btn btn-outline-primary rounded-circle"><i class="bi bi-linkedin"></i></a>
                    <a href="#" class="btn btn-outline-danger rounded-circle"><i class="bi bi-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection