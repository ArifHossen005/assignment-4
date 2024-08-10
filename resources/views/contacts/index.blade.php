@extends('master')

@section('body')
<div class="contact-manager">
    <div class="container py-5">
        <div class="row mb-4">
            <div class="col-12 d-flex justify-content-between align-items-center mb-3">
                <div>
                    <a href="{{ route('contacts.create') }}" class="btn btn-info">Create New Contact</a>
                    <a href="{{ route('contacts.index') }}" class="btn btn-info">All Contacts</a>
                </div>
                <form class="form-inline d-flex" method="GET" action="{{ route('contacts.index') }}">
                    <input type="text" class="form-control mr-2" name="search" placeholder="Search by name or email">
                    <button type="submit" class="btn btn-info">Search</button>
                </form>
            </div>
        </div>
        
        <hr>
        
        <div class="row">
            <div class="col-12">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
        
                <table class="table">
                    <thead>
                        <tr>
                            <th><a href="{{ route('contacts.index', ['sort' => 'name', 'order' => request('order') === 'asc' ? 'desc' : 'asc']) }}">Name</a></th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th><a href="{{ route('contacts.index', ['sort' => 'created_at', 'order' => request('order') === 'asc' ? 'desc' : 'asc']) }}">Created At</a></th>
                            <th><a href="{{ route('contacts.index', ['sort' => 'updated_at', 'order' => request('order') === 'asc' ? 'desc' : 'asc']) }}">Updated At</a></th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contacts as $contact)
                        <tr>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->phone }}</td>
                            <td>{{ $contact->address }}</td>
                            <td>{{ $contact->created_at }}</td>
                            <td>{{ $contact->updated_at }}</td>
                            <td>
                                <a href="{{ route('contacts.show', $contact->id) }}" class="btn btn-info">View</a>
                                <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-success">Edit</a>
                                <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Are You Sure?')" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
</div>
@endsection
