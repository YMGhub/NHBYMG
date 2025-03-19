<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('application_rentals', function (Blueprint $table) {
            $table->string('applicant_address2')->nullable()->after('applicant_address');
            $table->string('co_applicant_address2')->nullable()->after('co_applicant_address');
            $table->string('applicant_parish')->nullable()->after('applicant_address2');
            $table->string('co_applicant_parish')->nullable()->after('co_applicant_address2');
        });
    }

    public function down()
    {
        Schema::table('application_rentals', function (Blueprint $table) {
            $table->dropColumn(['applicant_address2', 'co_applicant_address2', 'applicant_parish', 'co_applicant_parish']);
        });
    }
};

