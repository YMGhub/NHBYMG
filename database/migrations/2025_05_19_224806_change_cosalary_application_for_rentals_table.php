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
        //
          Schema::table('application_rentals', function (Blueprint $table) {
            // Cambiar el tipo de integer a string
            $table->text('co_salary')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
         Schema::table('application_rentals', function (Blueprint $table) {
            // Revertir el cambio si hace falta
            $table->text('co_salary')->nullable()->change();
        });
    }
};
