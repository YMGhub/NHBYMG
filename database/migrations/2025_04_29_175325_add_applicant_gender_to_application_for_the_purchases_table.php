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
            $table->string('applicant_gender')->nullable()->after('applicant_date_birth');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('application_for_the_purchases', function (Blueprint $table) {
            $table->dropColumn('applicant_gender');
        });
    }
};
