@extends('layouts.app')

@section('content')
    <div class="shadow p-4 rounded bg-white">
        <h2 class="mb-4"><i class="bi bi-pencil-square"></i> Edit Produk</h2>
        
        <form action="/edit-product/{{ $product->id }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <label class="form-label fw-bold">Nama Produk</label>
                <input name="name" type="text" class="form-control" value="{{ $product->name }}">
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Harga</label>
                    <input name="price" type="text" class="form-control" value="{{ $product->price }}">
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Kategori</label>
                    <input name="category" type="text" class="form-control" value="{{ $product->category }}">
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Link Gambar (URL)</label>
                <input name="image" type="text" class="form-control" value="{{ $product->image }}">
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Deskripsi</label>
                <textarea name="description" class="form-control" rows="3">{{ $product->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-dark px-4">Update Produk</button>
            <a href="/products" class="btn btn-outline-secondary ms-2">Batal</a>
        </form>
    </div>
@endsection