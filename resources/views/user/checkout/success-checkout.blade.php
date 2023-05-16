@extends('layouts.master', ['title' => 'Checkout Success'])

@section('content')
<section class="container my-3">
    <div class="row py-5 justify-content-center">
        <div class="col-lg-6 text-center">
            <img src="{{ asset('assets/images/ill_register.png') }}" alt="" class="img-fluid rounded mb-5" width="350">
            <h2 class="fw-medium">Berhasil Checkout</h2>
            <p class="mb-4">Silahkan menuju halaman Dashboard untuk melakukan pembayaran</p>
            <a href="" class="btn btn-primary px-4 shadow-sm btn-rounded px-4 py-2">My Dashboard</a>
        </div>
    </div>
</section>
@endsection