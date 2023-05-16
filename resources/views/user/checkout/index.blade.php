@extends('layouts.app', ['title' => 'Checkout'])

@section('content')
<section class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">

            <p class="fw-medium text-green text-center">YOUR FUTURE CAREER</p>
            <h3 class="fw-semibold text-center">Start Invest Today</h3>

            <div class="row mt-5">

                <div class="col-lg-5">
                    <img src="{{ asset('assets/images/item_bootcamp.png') }}" alt="" class="img-fluid mb-4 rounded">
                    <h4>Web Developer</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, cupiditate!</p>
                </div>

                <div class="col-lg-1"></div>
                <div class="col-lg-6">
                    <form action="">
                        <div class="mb-4">
                            <label for="" class="mb-2" class="mb-2">Name</label>
                            <input type="text" class="form-control form-rounded py-2 form-rounded py-2">
                        </div>
                        <div class="mb-4">
                            <label for="" class="mb-2">Email</label>
                            <input type="text" class="form-control form-rounded py-2">
                        </div>
                        <div class="mb-4">
                            <label for="" class="mb-2">Occupation</label>
                            <input type="text" class="form-control form-rounded py-2">
                        </div>
                        <div class="mb-4">
                            <label for="" class="mb-2">Phone</label>
                            <input type="text" class="form-control form-rounded py-2">
                        </div>
                        <div class="mb-4">
                            <label for="" class="mb-2">Alamat</label>
                            <input type="text" class="form-control form-rounded py-2">
                        </div>
                        <div class="row mx-0">
                            <button type="submit" class="btn btn-primary btn-rounded py-2">Checkout</button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</section>
@endsection