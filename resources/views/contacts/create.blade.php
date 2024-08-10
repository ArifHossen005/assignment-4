@extends('master')

@section('body')

<div class="container py-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card shadow-lg">
                <div class="card-header text-dark text-center" style="background-color: #F8EDE3;">
                    <h3>Create Contact</h3>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('contacts.store') }}" method="POST">
                        @csrf
                        <div class="form-group mb-4">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" name="phone" id="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}">
                            @error('phone')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" name="address" id="address" class="form-control @error('address') is-invalid @enderror" value="{{ old('address') }}">
                            @error('address')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-grid" style="background-color: #F8EDE3;">
                            <button type="submit" class="btn btn-lg" >
                                <i class="bi bi-save"></i> Create Contact
                            </button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-end" style="background-color: #F8EDE3; text-color:black">
                    <a href="{{ route('contacts.index') }}" class="btn btn-outline-secondary">
                        <i class="bi bi-x-circle bg-slate-400"></i> Cancel
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection