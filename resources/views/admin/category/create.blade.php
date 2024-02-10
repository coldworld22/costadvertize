@extends('layouts.admin.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">Create Category</h4>

    <!-- Display Validation Errors -->
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif


    <!-- Category Creation Form -->
    <form action="{{ route('admin.categories.store') }}" method="POST">
        @csrf <!-- CSRF Token is required for form submissions in Laravel -->
        <div class="mb-3">
            <label for="name" class="form-label">Category Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Category Name" required>
        </div>
        
        <div class="mb-3">
            <label for="parent_id" class="form-label">Parent Category (Optional)</label>
            <select class="form-control" id="parent_id" name="parent_id">
                <option value="">None</option>
                @foreach($categories as $parentCategory)
                    <option value="{{ $parentCategory->id }}">{{ $parentCategory->name }}</option>
                @endforeach
            </select>
        </div>
        

        <div class="mb-3">
            <label for="store_id" class="form-label">Store (Optional for Admin)</label>
            <select class="form-control" id="store_id" name="store_id">
                <option value="">None</option>
                @foreach(App\Models\Store::all() as $store)
                    <option value="{{ $store->id }}">{{ $store->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Create Category</button>
    </form>
</div>

@endsection
