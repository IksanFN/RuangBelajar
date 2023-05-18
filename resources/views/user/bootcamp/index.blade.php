@extends('layouts.master', ['title' => 'Bootcamp'])

@section('content')
<section class="container py-3">
    <div class="row justify-content-center mt-5 mb-4">
        <div class="col-lg-8">
            <h3 class="">All Bootcamp</h3>
        </div>
    </div>
    <div class="row  justify-content-center">
    @forelse ($bootcamps as $bootcamp)
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm py-2 px-3 mb-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="{{ asset('assets/images/banner.jpg') }}" alt="banner" class="img-fluid rounded mb-3">
                        </div>
                        <div class="col-sm-6">
                            <a href=""><h4 class="mb-2">{{ $bootcamp->title }}</h4></a>
                            <hr>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum laudantium ullam dicta doloribus iure ad consectetur. Ratione assumenda deleniti facilis?</p>
                            
                        </div>
                    </div>
                    <div class="d-flex align-items-center mt-2">
                        <p class="h4 me-auto">IDR {{ number_format($bootcamp->price) }}</p>
                        <a href="{{ route('checkout', $bootcamp->slug) }}" class="btn btn-primary btn-rounded me-2">Take Events</a>
                    </div>
                </div>
            </div>
        </div>
    @empty
    </div>
        <div class="alert alert-warning">
            Sepertinya bootcamp belum tersedia.
        </div>
    @endforelse
  </section>
@endsection

@section('footer')
<div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <p class="col-md-4 mb-0 text-body-secondary">&copy; 2023 SanCamp, Inc</p>
    </footer>
  </div>
@endsection