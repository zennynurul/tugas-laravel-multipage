@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card shadow-sm border-0 mb-5">
            <div class="card-header bg-dark text-white fw-bold p-3">
                <i class="bi bi-plus-circle"></i> Tambah Produk Baru
            </div>
            <div class="card-body bg-white p-4">
               <form action="/create-product" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Nama Produk</label>
                            <!-- class is-invalid akan memunculkan garis merah jika ada error -->
                            <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Cth: Kemeja Flanel" value="{{ old('name') }}">
                            <!-- Tempat memunculkan teks error -->
                            @error('name')
                                <div class="invalid-feedback fw-bold">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Kategori</label>
                            <input name="category" type="text" class="form-control @error('category') is-invalid @enderror" placeholder="Cth: Pakaian" value="{{ old('category') }}">
                            @error('category')
                                <div class="invalid-feedback fw-bold">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="col-md-12 mb-3">
                            <label class="form-label fw-bold">Harga</label>
                            <input name="price" type="text" class="form-control @error('price') is-invalid @enderror" placeholder="Cth: Rp 150.000" value="{{ old('price') }}">
                            @error('price')
                                <div class="invalid-feedback fw-bold">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="col-md-12 mb-3">
                            <label class="form-label fw-bold">Link Gambar (URL)</label>
                            <input name="image" type="text" class="form-control @error('image') is-invalid @enderror" placeholder="URL Gambar Unsplash/Internet" value="{{ old('image') }}">
                            @error('image')
                                <div class="invalid-feedback fw-bold">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="col-md-12 mb-4">
                            <label class="form-label fw-bold">Deskripsi</label>
                            <textarea name="description" class="form-control @error('description') is-invalid @enderror" placeholder="Deskripsi detail produk..." rows="4">{{ old('description') }}</textarea>
                            @error('description')
                                <div class="invalid-feedback fw-bold">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-dark px-4">Simpan Produk</button>
                    <a href="/products" class="btn btn-outline-secondary ms-2">Batal</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
