@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="text-center mb-5">
            <h2 class="fw-bolder">Hubungi Customer Support</h2>
            <p class="lead">Punya kendala dengan pengiriman atau produk? Kirimkan tiket bantuan melalui form di bawah ini.</p>
        </div>
        
        <div class="card shadow-sm border-0 p-4">
            <form>
                <div class="form-floating mb-3">
                    <input class="form-control" id="orderId" type="text" placeholder="INV-001" />
                    <label for="orderId">Nomor Pesanan (Opsional)</label>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" id="email" type="email" placeholder="name@example.com" />
                    <label for="email">Alamat Email</label>
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control" id="message" placeholder="Tulis pesan..." style="height: 10rem"></textarea>
                    <label for="message">Pesan / Keluhan</label>
                </div>
                <div class="d-grid">
                    <button class="btn btn-dark btn-lg" type="button">Kirim Pesan Bantuan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection