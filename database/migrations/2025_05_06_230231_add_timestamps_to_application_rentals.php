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
        Schema::table('application_rentals', function (Blueprint $table) {
            $table->timestamps(); // Esto agrega created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('application_rentals', function (Blueprint $table) {
            $table->dropTimestamps(); // Esto elimina created_at y updated_at
        });
    }
};
