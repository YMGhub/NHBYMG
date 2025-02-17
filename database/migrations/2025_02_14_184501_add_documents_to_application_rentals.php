<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('application_rentals', function (Blueprint $table) {
            $table->longText('passport')->nullable()->after('payslips');
            $table->longText('job_letter')->nullable()->after('passport');
            $table->longText('id_card')->nullable()->after('job_letter');
        });
    }

    public function down(): void
    {
        Schema::table('application_rentals', function (Blueprint $table) {
            $table->dropColumn(['passport', 'job_letter', 'id_card']);
        });
    }
};