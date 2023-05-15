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

@section('footer')
<div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <p class="col-md-4 mb-0 text-body-secondary">&copy; 2023 LearnLabs, Inc</p>
  
      <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
      </a>
  
      <ul class="nav col-md-4 justify-content-end">
        <li class="nav-item"><a href="index.html" class="nav-link px-2 text-body-secondary">Home</a></li>
        <li class="nav-item"><a href="about.html" class="nav-link px-2 text-body-secondary">About</a></li>
        <li class="nav-item"><a href="events.html" class="nav-link px-2 text-body-secondary">Events</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
      </ul>
    </footer>
  </div>
@endsection