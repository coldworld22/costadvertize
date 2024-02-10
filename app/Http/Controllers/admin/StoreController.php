<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Store;
use Illuminate\Support\Facades\File;


class StoreController extends Controller
{
    // Display a listing of the stores
    public function index()
    {
        $stores = Store::all();
        return view('admin.stores.index', compact('stores'));
    }

    
    
    // Show the form for creating a new store
    public function create()
    {
        
        return view('admin.stores.create');
    }

    // Store a newly created store in storage
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'business_phone' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate the image
            'store_business_description' => 'nullable|string',
            'location' => 'nullable|string',
            'country' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'zip_code' => 'required|string|max:255',
            'phone_code' => 'required|string|max:255',
            'business_email' => 'required|string|email|max:255|unique:stores',
        ]);
    
        // Handle file upload
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('img/stores'), $imageName); // Adjusted path
            $validatedData['image'] = 'img/stores/' . $imageName; // Adjusted path
        }
    
        Store::create($validatedData);
    
        return back()->with('success', 'Store created successfully.');
    }
    

    // Display the specified store
    public function show(Store $store)
    {
        return view('admin.stores.show', compact('store'));
    }

    // Show the form for editing the specified store
    public function edit(Store $store)
    {
        return view('admin.stores.edit', compact('store'));
    }

    // Update the specified store in storage
    public function update(Request $request, Store $store)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            // Add other fields as necessary
        ]);

        $store->update($validatedData);

        return redirect()->route('store.index')->with('success', 'Store updated successfully.');
    }

    // Remove the specified store from storage
    public function destroy(Store $store)
    {
        $store->delete();
        return redirect()->route('store.index')->with('success', 'Store deleted successfully.');
    }
}


