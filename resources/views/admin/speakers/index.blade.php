@extends('layouts.master', ['title' => 'Speakers'])

@section('content')
<section class="container my-5">
    <div class="row">
      <div class="col-lg-12">
        <div class="card border-0 shadow-sm px-3 pt-2">
          <div class="card-body">
            <h4 class="fw-medium text-green">Speakers</h4>
          </div>
        </div>
        @include('partials.alert')
        <a href="{{ route('admin.speaker_create') }}" class="btn px-4 py-2 shadow-sm btn-primary btn-rounded mt-4">Create Speaker</a>
        <div class="card border-0 mt-2">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <th>No</th>
                            <th>Avatar</th>
                            <th>Name</th>
                            <th>Occupation</th>
                            <th class="text-center">Action</th>
                        </thead>
                        <tbody>
                          @forelse ($speakers as $speaker)
                              <tr>
                                <td class="align-middle">{{ $nomor++ }}</td>
                                <td class="align-middle"><img src="{{ asset('storage/images/'.$speaker->avatar) }}" alt="" class="img-fluid rounded-circle" width="50"></td>
                                <td class="align-middle">{{ $speaker->name }}</td>
                                <td class="align-middle">{{ $speaker->occupation }}</td>
                                <td class="align-middle text-center">
                                  <a href="" class="btn btn-sm btn-primary btn-rounded">Detail</a>
                                  <a href="" class="btn btn-sm btn-secondary btn-rounded mx-2 my-2">Edit</a>
                                  <a href="" class="btn btn-sm btn-warning btn-rounded">Delete</a>
                                </td>
                              </tr>
                          @empty
                            <div class="alert alert-danger">
                              Data Speaker belum tersedia.
                            </div>
                          @endforelse
                        </tbody>
                    </table>
                    {{-- {{ $speakers->currentPage() }} --}}
                    {{ $speakers->links() }}
                </div>
            </div>
        </div>
      </div>
    </div>
</section>
@endsection