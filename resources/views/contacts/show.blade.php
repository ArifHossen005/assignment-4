@extends('master')

@section('body')

<div class="container py-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card shadow-sm">
                <div class="card-header  text-black text-center">
                    <h2 class="card-title mb-0">Contact Details</h2>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="card border-primary h-100">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Name</h5>
                                    <p class="card-text">{{ $contact->name }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card border-secondary h-100">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Email</h5>
                                    <p class="card-text">{{ $contact->email }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card border-success h-100">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Phone</h5>
                                    <p class="card-text">{{ $contact->phone }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card border-info h-100">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Address</h5>
                                    <p class="card-text">{{ $contact->address }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card border-warning h-100">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Created At</h5>
                                    <p class="card-text">{{ $contact->created_at->format('F j, Y, g:i a') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card border-danger h-100">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Updated At</h5>
                                    <p class="card-text">{{ $contact->updated_at->format('F j, Y, g:i a') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-light text-end">
                    <a href="{{ route('contacts.index') }}" class="btn btn-outline-primary">Back to List</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
