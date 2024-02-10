<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'business_phone', 'image', 'store_business_description',
        'location', 'country', 'city', 'zip_code', 'phone_code', 'business_email',
    ];
    
}
