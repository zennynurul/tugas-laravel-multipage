@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card border-0 shadow-sm rounded-4 p-5">
            <h2 class="fw-bold mb-4">Buat Artikel Baru</h2>
            
            <form action="/create-article" method="POST" enctype="multipart/form-data" novalidate>
                @csrf
                
                <div class="mb-3">
                    <label class="form-label fw-bold">Judul Artikel</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" placeholder="Masukkan judul menarik..." required maxlength="255">
                    @error('title') 
                        <div class="invalid-feedback d-block">{{ $message }}</div> 
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Kategori</label>
                    <select name="category" class="form-select @error('category') is-invalid @enderror" required>
                        <option value="">Pilih Kategori</option>
                        <option value="Teknologi">Teknologi</option>
                        <option value="Desain">Desain</option>
                        <option value="Inspirasi">Inspirasi</option>
                    </select>
                    @error('category') 
                        <div class="invalid-feedback d-block">{{ $message }}</div> 
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Pilih Gambar Sampul</label>
                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" accept="image/*" required>
                    @error('image') 
                        <div class="invalid-feedback d-block">{{ $message }}</div> 
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="form-label fw-bold">Konten Artikel</label>
                    <textarea name="description" class="form-control @error('description') is-invalid @enderror" rows="8" placeholder="Tuliskan pemikiranmu di sini..." required>{{ old('description') }}</textarea>
                    @error('description') 
                        <div class="invalid-feedback d-block">{{ $message }}</div> 
                    @enderror
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary px-4 rounded-pill fw-bold">Publikasikan</button>
                    <a href="/artikel" class="btn btn-outline-secondary px-4 rounded-pill">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection