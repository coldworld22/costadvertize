<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('categories', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->unsignedBigInteger('parent_id')->nullable(); // For subcategories
        $table->unsignedBigInteger('store_id')->nullable(); // Link to a specific store
        $table->timestamps();

        // Foreign key constraints
        $table->foreign('parent_id')->references('id')->on('categories')->onDelete('set null');
        $table->foreign('store_id')->references('id')->on('stores')->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
