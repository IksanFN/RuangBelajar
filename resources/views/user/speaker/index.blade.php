@extends('layouts.master', ['title' => 'Speaker'])

@section('content')
<section class="container my-5">
    <div class="row justify-content-center mt-5 mb-4">
        <div class="col-lg-8">
            <h3 class="">Our Speakers</h3>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="row">
                <div class="col-lg-4 mb-2">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body pb-0">
                            <img src="{{ asset('assets/images/banner.jpg') }}" alt="" class="img-fluid rounded mb-2" width="500">
                            <h5>Iksan Fauzi</h5>
                            <p>Back End Developer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-2">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body pb-0">
                            <img src="{{ asset('assets/images/banner.jpg') }}" alt="" class="img-fluid rounded mb-2" width="500">
                            <h5>Fannya</h5>
                            <p>UI/UX Designer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-2">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body pb-0">
                            <img src="{{ asset('assets/images/banner.jpg') }}" alt="" class="img-fluid rounded mb-2" width="500">
                            <h5>Taufan</h5>
                            <p>Data Science</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('footer')
<div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <p class="col-md-4 mb-0 text-body-secondary">&copy; 2023 SanCamp, Inc</p>
    </footer>
  </div>
@endsection