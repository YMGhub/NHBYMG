<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('address');
            $table->string('area');
            $table->integer('bedrooms');
            $table->integer('bathrooms');
            $table->boolean('featured')->default(false);
            $table->enum('status', ['available', 'unavailable'])->default('available');
            $table->decimal('price_or_rent_type', 10, 2);
            //$table->foreignId('category')->constrained('property_categories')->onDelete('cascade'); // Relación con Categoría
            $table->string('category');
            $table->string('google_map_propertie')->nullable();
            $table->string('author');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
