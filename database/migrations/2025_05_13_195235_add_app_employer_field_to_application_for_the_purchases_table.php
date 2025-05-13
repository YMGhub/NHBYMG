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
         Schema::table('application_for_the_purchases', function (Blueprint $table) {
            $table->string('app_employer_field')->nullable();
            // Reemplaza 'last_column_name' con el nombre de la columna existente después de la cual deseas agregar este campo.
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         Schema::table('application_for_the_purchases', function (Blueprint $table) {
            $table->dropColumn('app_employer_field');
        });
    }
};
