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
            $table->text('app_occupation_field')->nullable();
            $table->text('app_period_of_employment')->nullable();
            $table->text('app_salary')->nullable();
            $table->text('app_employment_status')->nullable();

            // Campos del co-solicitante
            $table->text('coapplicant_email')->nullable();
            $table->text('co_marital_status')->nullable();
            $table->text('co_applicant_citizenship')->nullable();
            $table->text('co_applicant_country_of_residence')->nullable();
            $table->text('co_app_employer_field')->nullable();
            $table->text('co_app_occupation_field')->nullable();
            $table->text('co_app_period_of_employment')->nullable();
            $table->text('co_app_salary')->nullable();
            $table->text('co_app_pay_period')->nullable();
            $table->text('co_app_employment_status')->nullable();
            //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         Schema::table('application_for_the_purchases', function (Blueprint $table) {
            $table->dropColumn([
                'app_occupation_field',
                'app_period_of_employment',
                'app_salary',
                'app_employment_status',
                'coapplicant_email',
                'co_marital_status',
                'co_applicant_citizenship',
                'co_applicant_country_of_residence',
                'co_app_employer_field',
                'co_app_occupation_field',
                'co_app_period_of_employment',
                'co_app_salary',
                'co_app_pay_period',
                'co_app_employment_status',
            ]);
        });
    }
};
