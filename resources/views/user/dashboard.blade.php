@extends('layouts.master', ['title' => 'Dashboard'])

@section('content')
<section class="container my-5">
    <div class="row">
      <div class="col-lg-12">
        <div class="card border-0 shadow-sm px-3 pt-2">
          <div class="card-body">
            <h5 class="fw-medium text-green">Dashboard</h5>
          </div>
        </div>
        @if ($noPaid > 0)
        <div class="alert alert-warning my-3">
            <strong>{{ $noPaid }}</strong> transaction is not paid!
        </div>
        @endif
        <div class="row mt-3 justify-content-center">
          <div class="col-lg-4 mb-3">
            <div class="card border-0 shadow-sm">
              <div class="card-body pt-3 pb-0">
                <div class="row">
                  <div class="col-xl-12 col-sm-6 col-12 mb-4">
                      <div class="d-flex pt-1 pb-0 justify-content-between px-md-1">
                          <div>
                            <h3 class="text-primary">{{ $countBootcamp }}</h3>
                            <p class="mb-0">Bootcamp</p>
                          </div>
                          <div class="align-self-center">
                            <i class="fa-solid fa-book fa-3x text-primary"></i>
                          </div>
                      </div>
                  </div>
              </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-3">
            <div class="card border-0 shadow-sm">
              <div class="card-body pt-3 pb-0">
                <div class="row">
                  <div class="col-xl-12 col-sm-6 col-12 mb-4">
                      <div class="d-flex pt-1 pb-0 justify-content-between px-md-1">
                          <div>
                            <h3 class="text-secondary">{{ $countTransaction }}</h3>
                            <p class="mb-0">Transaction</p>
                          </div>
                          <div class="align-self-center">
                            <i class="fa-solid fa-money-bill fa-3x text-secondary"></i>
                          </div>
                      </div>
                  </div>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
@endsection