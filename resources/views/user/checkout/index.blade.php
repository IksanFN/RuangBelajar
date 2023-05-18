@extends('layouts.master', ['title' => 'Checkout'])

@section('content')
<section class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">

            <p class="fw-medium text-green text-center">YOUR FUTURE CAREER</p>
            <h3 class="fw-semibold text-center">Start Invest Today</h3>

            <div class="row mt-5">

                <div class="col-lg-5">
                    <img src="{{ asset('assets/images/item_bootcamp.png') }}" alt="" class="img-fluid mb-4 rounded">
                    <h5 class="text-green text-uppercase fw-semibold">{{ $bootcamp->title }}</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, cupiditate!</p>
                </div>

                <div class="col-lg-1"></div>
                <div class="col-lg-6">
                    <form action="{{ route('checkout.store', $bootcamp->id) }}" method="post">
                        @csrf
                        <div class="mb-4">
                            <label for="" class="mb-2" class="mb-2">Name</label>
                            <input type="text" name="name" class="form-control form-rounded form-rounded py-2" value="{{ old('name', Auth::user()->name) }}">
                        </div>
                        <div class="mb-4">
                            <label for="" class="mb-2">Email</label>
                            <input type="text" name="email" class="form-control form-rounded py-2" value="{{ old('email', Auth::user()->email) }}">
                        </div>
                        <div class="mb-4">
                            <label for="" class="mb-2">Occupation</label>
                            <input type="text" name="occupation" class="form-control form-rounded py-2" value="{{ old('occupation', Auth::user()->occupation) }}">
                        </div>
                        <div class="mb-4">
                            <label for="" class="mb-2">Phone</label>
                            <input type="text" name="phone_number" class="form-control form-rounded py-2" value="{{ old('phone_number', Auth::user()->phone_number) }}">
                        </div>
                        <div class="mb-4">
                            <label for="" class="mb-2">Address</label>
                            <textarea name="address" class="form-control form-rounded">{{ old('address', Auth::user()->address) }}</textarea>
                        </div>
                        <div class="row mx-0">
                            <button type="submit" class="btn btn-primary btn-rounded py-2">Checkout</button>
                            {{-- <a href="{{ route('checkout.success') }}" class="btn btn-primary btn-rounded py-2">Checkout</a> --}}
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</section>
@endsection