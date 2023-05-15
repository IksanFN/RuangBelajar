@extends('layouts.app', ['title' => 'Detail Program'])

@section('content')
<section class="container py-3">
    <div class="row my-5">
        <div class="col-md-5 mb-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <img src="{{ asset('assets/images/banner.png') }}" alt="" class="img-fluid rounded">
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="card p-2 border-0 shadow-sm">
                <div class="card-body">
                    <h3 class="mb-3">Personal Branding</h3>
                    <hr>
                    <h5>Deskripsi</h5>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga provident soluta eaque ex optio inventore sed et odit, aspernatur nulla, numquam molestias minima voluptates itaque, similique repellat velit magnam necessitatibus
                    </p>
                    <p class="mb-1">Lecturer : Iksan Fauzi</p>
                    <p class="mb-1">Tipe Event : Offline</p> 
                    <p class="mb-1">Tempat : Gedung Ballroom</p>
                    <p class="mb-1">Waktu : 5 Agustus 2023</p>
                    <p class="mb-1">Category : Teknologi, Karir</p>
                    <p class="mb-3">Biaya : <strong>Rp. 280.000</strong></p>
                    <div class="row mx-0">
                        <a href="" class="btn btn-primary btn-rounded">Gabung Event</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
@endsection