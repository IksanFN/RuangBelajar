@extends('layouts.app', ['title' => 'Program'])

@section('content')
<section class="container py-3">
    <div class="row  justify-content-center my-5">
        <div class="col-lg-8">
            <h3 class="mb-4">Events</h3>
            <div class="card border-0 shadow-sm py-2 px-3 mb-3">
                <di class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="{{ asset('assets/images/banner.jpg') }}" alt="banner" class="img-fluid rounded mb-3">
                        </div>
                        <div class="col-sm-6">
                            <a href=""><h4 class="mb-2">Events Tarpan </h4></a>
                            <hr>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum laudantium ullam dicta doloribus iure ad consectetur. Ratione assumenda deleniti facilis?</p>
                            
                        </div>
                    </div>
                    <div class="d-flex align-items-center mt-2">
                        <p class="h4 me-auto">IDR 280.000</p>
                        <a href="" class="btn btn-primary btn-rounded me-2">Take Events</a>
                    </div>
                </di>
            </div>
        </div>
    </div>
  </section>
@endsection