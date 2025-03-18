<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('application_for_the_purchases', function (Blueprint $table) {
            $table->string('applicant_address2')->nullable();
            $table->string('applicant_address3')->nullable();
            $table->string('applicant_parish')->nullable();
            $table->string('coapplicant_address2')->nullable();
            $table->string('coapplicant_address3')->nullable();
            $table->string('coapplicant_parish')->nullable();
            $table->json('addmore')->nullable();
            $table->string('land_or_lot')->nullable();
            $table->string('bankstatements')->nullable();
        });
    }

    public function down()
    {
        Schema::table('application_for_the_purchases', function (Blueprint $table) {
            $table->dropColumn([
                'applicant_address2',
                'applicant_address3',
                'applicant_parish',
                'coapplicant_address2',
                'coapplicant_address3',
                'coapplicant_parish',
                'addmore',
                'land_or_lot',
                'bankstatements'
            ]);
        });
    }
};
