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
        Schema::create('link_requests', function (Blueprint $table) {
            $table->id();
            $table->string('email')->nullable();
            $table->string('hash')->unique()->nullable();
            $table->string('type_forms');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('link_requests');
    }
};
