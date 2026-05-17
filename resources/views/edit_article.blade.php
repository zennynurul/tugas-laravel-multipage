@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card border-0 shadow-sm rounded-4 p-5">
            <h2 class="fw-bold mb-4">Edit Artikel</h2>
            
            <form action="/edit-article/{{ $article->id }}" method="POST" enctype="multipart/form-data" novalidate>
                @csrf
                @method('PUT') <div class="mb-3">
                    <label class="form-label fw-bold">Judul Artikel</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $article->title) }}" required maxlength="255">
                    @error('title') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Kategori</label>
                    <input type="text" name="category" class="form-control @error('category') is-invalid @enderror" value="{{ old('category', $article->category) }}" required>
                    @error('category') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Gambar Sampul Saat Ini</label>
                    <div class="mb-2">
                        @if(Str::startsWith($article->image, 'http'))
                            <img src="{{ $article->image }}" alt="Preview" class="img-thumbnail" width="200">
                        @else
                            <img src="{{ asset('storage/' . $article->image) }}" alt="Preview" class="img-thumbnail" width="200">
                        @endif
                    </div>
                    
                    <label class="form-label fw-bold">Ganti Gambar (Opsional)</label>
                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" accept="image/*">
                    <small class="text-muted">Biarkan kosong jika tidak ingin mengubah gambar.</small>
                    @error('image') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                </div>

                <div class="mb-4">
                    <label class="form-label fw-bold">Konten Artikel</label>
                    <textarea name="description" class="form-control @error('description') is-invalid @enderror" rows="8" required>{{ old('description', $article->description) }}</textarea>
                    @error('description') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary px-4 rounded-pill fw-bold">Simpan Perubahan</button>
                    <a href="/artikel" class="btn btn-outline-secondary px-4 rounded-pill">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection