@extends('layouts.admin.main')

@section('content')
<div class="container">
    <h2>Create Store</h2>
    <form action="{{ route('admin.stores.store') }}" method="POST" enctype="multipart/form-data"> 
        @csrf
        <div class="form-group">
            <label for="name">Store Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

    
        <div class="form-group">
            <label for="business_phone">Business Phone</label>
            <input type="text" class="form-control" id="business_phone" name="business_phone">
        </div>

        <div class="form-group">
            <label for="image">Store Image</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>

        <div class="form-group">
            <label for="store_business_description">Business Description</label>
            <textarea class="form-control" id="store_business_description" name="store_business_description"></textarea>
        </div>

        <div class="form-group">
            <label for="location">Location</label>
            <input type="text" class="form-control" id="location" name="location">
        </div>

        <div class="form-group">
            <label for="country">Country</label>
            <input type="text" class="form-control" id="country" name="country">
        </div>
        
        <div class="form-group">
            <label for="city">City</label>
            <input type="text" class="form-control" id="city" name="city">
        </div>
        <div class="form-group">
            <label for="city">Phone Code</label>
            <input type="text" class="form-control" id="zip_code" name="zip_code">
        </div>
        <div class="form-group">
            <label for="city">Zip Code</label>
            <input type="text" class="form-control" id="phone_code" name="phone_code">
        </div>
        

        <div class="form-group">
            <label for="business_email">Business Email</label>
            <input type="email" class="form-control" id="business_email" name="business_email" required>
        </div>

        <button type="submit" class="btn btn-success">Save Store</button>
    </form>
</div>



@endsection
