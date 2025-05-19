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
            //
             $table->text('mortage_certificate_doc')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('application_for_the_purchases', function (Blueprint $table) {
            //
              $table->dropColumn(['mortage_certificate_doc']);

        });
    }
};
