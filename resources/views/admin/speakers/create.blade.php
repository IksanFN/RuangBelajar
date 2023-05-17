@extends('layouts.master', ['title' => 'Create Speaker'])

@section('content')
<section class="container my-5">
    <div class="row">
        <div class="col-lg-12">
            <div class="card border-0 shadow-sm px-3 pt-2">
              <div class="card-body">
                <h5 class="fw-medium text-green">Create Speaker</h5>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card border-0 shadow-sm px-3 py-2 mt-4">
                <div class="card-body">
                    <form action="{{ route('admin.speaker_store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="mb-2">Name</label>
                            <input type="text" name="name" class="form-control form-rounded" placeholder="Jhon Doe" value="{{ old('name') }}">
                        </div>
                        <div class="mb-3">
                            <label for="" class="mb-2">Avatar</label>
                            <input type="file" name="avatar" class="form-control form-rounded">
                        </div>
                        <div class="mb-3">
                            <label for="" class="mb-2">Email</label>
                            <input type="email" name="email" class="form-control form-rounded" placeholder="jhon@example.com" value="{{ old('email') }}">
                        </div>
                        <div class="mb-3">
                            <label for="" class="mb-2">Status</label>
                            <select name="status" class="form-control form-rounded">
                                <option hidden>- Pilih status -</option>
                                <option value="Sekolah">Sekolah</option>
                                <option value="Kuliah">Kuliah</option>
                                <option value="Bekerja">Bekerja</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="mb-2">Occupation</label>
                            <input type="text" name="occupation" class="form-control form-rounded" placeholder="Web Developer" value="{{ old('occupation') }}">
                        </div>
                        <div class="mb-3">
                            <label for="" class="mb-2">Workplace</label>
                            <input type="text" name="workplace" class="form-control form-rounded" placeholder="PT. Indonesia Merdeka" value="{{ old('workplace') }}">
                        </div>
                        <div class="mb-3">
                            <label for="" class="mb-2">Address</label>
                            <textarea name="address" class="form-control form-rounded">{{ old('address') }}</textarea>
                        </div>
                        <div class="mb-4">
                            <label for="" class="mb-2">City</label>
                            <input type="text" name="city" class="form-control form-rounded" placeholder="Bandung" value="{{ old('city') }}">
                        </div>
                        <div class="mb-2">
                            <button type="submit" class="btn btn-primary btn-rounded px-5 py-2">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection