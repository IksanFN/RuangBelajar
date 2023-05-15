@extends('layouts.app', ['title' => 'Home'])

@section('content')
<section class="container py-3">
    <div class="row my-5 align-items-center">
        <div class="col-lg-6">
            <p class="fs-6 fw-medium text-green mb-2">LEARN FROM EXPERT</p>
            <h1 class="display-6 fw-semibold mb-3">Start Your <span class="text-primary">Developer Journey</span> Today</h1>
            <p class="fs-6 mb-4">Our bootcamp is helping junior developers who are really passionate in the programming.</p>
            <a href="register.html" class="btn btn-primary px-4 py-2 btn-rounded me-2">Get Started</a>
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-5 mt-4">
            <img src="{{ asset('assets/images/banner.png') }}" alt="banner" class="img-fluid rounded">
        </div>
    </div>
</section>
@endsection