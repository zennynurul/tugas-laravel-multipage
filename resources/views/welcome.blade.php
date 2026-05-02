@extends('layouts.app')

@section('content')
<div class="row align-items-center mb-5">
    <div class="col-lg-6">
        <h2 class="fw-bolder">Selamat Datang di ZenShop</h2>
        <p class="lead">Kami menyediakan berbagai kebutuhan fashion yang disesuaikan dengan tren terkini. Belanja aman, nyaman, dan pastinya banyak diskon menarik menanti Anda setiap minggunya.</p>
        <a class="btn btn-dark btn-lg mt-3" href="/products">Lihat Katalog <i class="bi bi-arrow-right"></i></a>
    </div>
    <div class="col-lg-6">
        <img class="img-fluid rounded-3 shadow" src="https://images.unsplash.com/photo-1483985988355-763728e1935b?w=800&h=500&fit=crop" alt="ZenShop Store" />
    </div>
</div>
@endsection