<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Store name
            $table->string('business_phone'); // Business phone
            $table->string('image')->nullable(); // Image, nullable if you allow stores without an image
            $table->text('store_business_description')->nullable(); // Business description, nullable if optional
            $table->string('location')->nullable(); // General location, nullable if optional
            $table->string('country'); // Country
            $table->string('city'); // City
            $table->string('zip_code'); // City
            $table->string('phone_code'); // City
            $table->string('business_email')->unique(); // Business email, unique to ensure no two stores share the same email
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stores');
    }
}
