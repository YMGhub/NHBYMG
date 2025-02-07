<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('application_for_the_purchases', function (Blueprint $table) {
            $table->decimal('qualifyngamount', 10, 2)->nullable()->after('signature_applican');
        });
    }

    public function down()
    {
        Schema::table('application_for_the_purchases', function (Blueprint $table) {
            $table->dropColumn('qualifyngamount');
        });
    }
};
