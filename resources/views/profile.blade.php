@extends('layouts.main')

@section('content')
<section class="container py-5 text-center">
    <h2 class="fw-bold">Profil Penulis</h2>
    <img src="https://ui-avatars.com/api/?name=Zen&size=150" class="rounded-circle my-3 shadow" alt="Profile">
    <p class="lead text-secondary">Halo, saya Zen. Pengembang website ini.</p>
    <p>Nama: {{ $data['name'] }}</p>
    <p>Address : {{ $data['address'] }}</p>
    <p>Email: {{ $data['email'] }}</p>
    <p>Universitas: {{ $data['univ'] }}</p>
</section>
@endsection