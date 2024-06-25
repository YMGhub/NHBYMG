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
            //
            $table->string('telephone')->nullable()->after('citizenship'); // Add the new field after 'content'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('application_rentals', function (Blueprint $table) {
            //
            $table->dropColumn('telephone'); // Rollback the added field
        });
    }
};


