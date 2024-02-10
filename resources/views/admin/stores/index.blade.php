@extends('layouts.admin.main')

@section('content')
<div class="container">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">My Stores List</h4>
    <!-- Add link to create a new store -->
    <a href="{{ route('admin.stores.create') }}" class="btn btn-primary mb-2">Add New Store</a>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Description</th>
                            <th>Location</th>
                            <th>Country</th>
                            <th>City</th>
                            <th>Email</th>
                            <th>Actions</th> 
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($stores as $store)
                        <tr>
                            <td>{{ $store->id }}</td>
                            <td>
                                @if($store->image)
                                    <img src="{{ asset($store->image) }}" width="100" height="60" alt="{{ $store->name }} Image">
                                @else
                                    No Image
                                @endif
                            </td>
                            <td>{{ $store->name }}</td>
                            <td>{{ $store->business_phone }}</td>
                            <td>{{ Str::limit($store->store_business_description, 50) }}</td> <!-- Limiting the description to 50 characters -->
                            <td>{{ $store->location }}</td>
                            <td>{{ $store->country }}</td>
                            <td>{{ $store->city }}</td>
                            <td>{{ $store->business_email }}</td>
                            <td class="action-buttons">
                                <td>
                                    <!-- View Button -->
                                    <a href="{{ route('admin.stores.show', $store) }}" class="btn btn-sm btn-info" style="margin-right: 5px;">View</a>
                                    <!-- Edit Button -->
                                    <a href="{{ route('admin.stores.edit', $store) }}" class="btn btn-sm btn-primary" style="margin-right: 5px;">Edit</a>
                                    <!-- Delete Button -->
                                    <form action="{{ route('admin.stores.destroy', $store) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </td>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    
</div>
    </div>
    
@endsection
