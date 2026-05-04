@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card border-0 shadow-sm rounded-4 p-5">
            <h2 class="fw-bold mb-4">Edit Artikel</h2>
            
            <form action="/edit-article/{{ $article->id }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="mb-3">
                    <label class="form-label fw-bold">Judul Artikel</label>
                    <input type="text" name="title" class="form-control" value="{{ $article->title }}">
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Kategori</label>
                    <input type="text" name="category" class="form-control" value="{{ $article->category }}">
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Link Gambar Sampul</label>
                    <input type="text" name="image" class="form-control" value="{{ $article->image }}">
                </div>

                <div class="mb-4">
                    <label class="form-label fw-bold">Konten Artikel</label>
                    <textarea name="description" class="form-control" rows="8">{{ $article->description }}</textarea>
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary px-4 rounded-pill fw-bold">Simpan Perubahan</button>
                    <!-- Tombol Batal Kembali ke /artikel -->
                    <a href="/artikel" class="btn btn-outline-secondary px-4 rounded-pill">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection