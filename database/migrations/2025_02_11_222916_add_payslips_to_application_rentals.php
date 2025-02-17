<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('application_rentals', function (Blueprint $table) {
            $table->longText('payslips')->nullable()->after('id'); // Ajusta "id" si deseas ubicarlo después de otra columna
        });
    }

    public function down(): void
    {
        Schema::table('application_rentals', function (Blueprint $table) {
            $table->dropColumn('payslips');
        });
    }
};