@extends('layouts.admin.main')

@section('content')
<div class="container">
    <h2>Store Details</h2>
    <p><strong>Name:</strong> {{ $store->name }}</p>
    <!-- Display other fields as necessary -->
</div>
@endsection
