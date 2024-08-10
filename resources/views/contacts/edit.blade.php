@extends('master')

@section('body')

<div class="contact-manager">
    <div class="container py-5">
        <div class="row">
            <div class="col-12 d-flex mb-4 justify-content-between align-items-center">
                <a href="{{ route('contacts.index') }}" class="btn btn-info" >
                    <i class="bi bi-arrow-left"></i> Back
                </a>
                
                <a href="{{ route('contacts.create') }}" class="btn btn-success">
                    <i class="bi bi-plus-lg"></i> Create New
                </a>
            </div>
            <div class="col-md-8 offset-md-2">
                <div class="card shadow-lg">

                    <div class="card-header text-black text-center" style="background-color: #F8EDE3;">
                        <h3>Edit Contact</h3>
                    </div>

                    <div class="card-body p-4">
                        <!-- Contact Edit Form -->
                        <form method="POST" action="{{ route('contacts.update', $contact->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group mb-4">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $contact->name) }}">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-4">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $contact->email) }}">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-4">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" name="phone" id="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone', $contact->phone) }}">
                                @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-4">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" name="address" id="address" class="form-control @error('address') is-invalid @enderror" value="{{ old('address', $contact->address) }}">
                                @error('address')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn text-black btn-lg" style="background-color: #F8EDE3;">
                                    <i class="bi bi-save"></i> Update Contact
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
