<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('address');
            $table->integer('area');
            $table->integer('bedrooms');
            $table->integer('bathrooms');
            $table->boolean('featured')->default(false);
            $table->enum('status', ['available', 'not_available'])->default('available');
            $table->string('price_or_rent_type');
            $table->foreignId('property_category_id')->constrained('property_categories')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('properties');
    }
};