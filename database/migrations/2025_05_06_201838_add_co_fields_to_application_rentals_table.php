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
            $table->unsignedBigInteger('co_client_id')->nullable()->after('co_applicant_surname'); // cambiar si necesario
            $table->string('co_email_field')->nullable()->after('co_client_id');

            // Reordenar las columnas si es importante el orden visual en DB (algunas DBs lo ignoran)
            // Para ubicar antes de 'co_applicant_surname', podemos hacer esto con una tabla temporal si es estrictamente necesario
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('application_rentals', function (Blueprint $table) {
            $table->dropColumn(['co_client_id', 'co_email_field']);
        });
    }
};
