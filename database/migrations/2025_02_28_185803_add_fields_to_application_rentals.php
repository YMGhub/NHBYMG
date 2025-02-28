<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('application_rentals', function (Blueprint $table) {
            $table->string('maiden_name', 191)->nullable()->after('co_applicant_address');
            $table->date('date_of_birth')->nullable()->after('maiden_name');
            $table->string('tamis_number', 191)->nullable()->after('date_of_birth');
            $table->string('phone_home', 50)->nullable()->after('tamis_number');
            $table->string('phone_work', 50)->nullable()->after('phone_home');
            $table->string('phone_cell', 50)->nullable()->after('phone_work');
            $table->text('email_field')->nullable()->after('phone_cell');
            $table->string('marital_status', 50)->nullable()->after('email_field');
            $table->text('citizenship_field')->nullable()->after('marital_status');
            $table->text('country_of_residence')->nullable()->after('citizenship_field');
            $table->text('employer_field')->nullable()->after('country_of_residence');
            $table->string('pay_period', 50)->nullable()->after('employer_field');
            $table->string('employment_status', 50)->nullable()->after('pay_period');

            // Campos del co-applicant
            $table->string('co_maiden_name', 191)->nullable()->after('employment_status');
            $table->string('co_national_registration_number', 191)->nullable()->after('co_maiden_name');
            $table->string('co_tamis_number', 191)->nullable()->after('co_national_registration_number');
            $table->date('co_date_of_birth')->nullable()->after('co_tamis_number');
            $table->string('co_phone_home', 50)->nullable()->after('co_date_of_birth');
            $table->string('co_phone_work', 50)->nullable()->after('co_phone_home');
            $table->string('co_phone_cell', 50)->nullable()->after('co_phone_work');
            $table->text('co_email')->nullable()->after('co_phone_cell');
            $table->string('co_marital_status', 50)->nullable()->after('co_email');
            $table->text('co_citizenship_field')->nullable()->after('co_marital_status');
            $table->text('co_country_of_residence')->nullable()->after('co_citizenship_field');
            $table->text('co_employer_field')->nullable()->after('co_country_of_residence');
            $table->text('co_occupation_field')->nullable()->after('co_employer_field');
            $table->string('co_period_of_employment', 50)->nullable()->after('co_occupation_field');
            $table->decimal('co_salary', 10, 2)->nullable()->after('co_period_of_employment');
            $table->string('co_pay_period', 50)->nullable()->after('co_salary');
            $table->string('co_employment_status', 50)->nullable()->after('co_pay_period');
        });
    }

    public function down()
    {
        Schema::table('application_rentals', function (Blueprint $table) {
            $table->dropColumn([
                'maiden_name', 'date_of_birth', 'tamis_number', 'phone_home', 'phone_work', 'phone_cell', 'email_field',
                'marital_status', 'citizenship_field', 'country_of_residence', 'employer_field', 'pay_period', 'employment_status',
                'co_maiden_name', 'co_national_registration_number', 'co_tamis_number', 'co_date_of_birth', 'co_phone_home',
                'co_phone_work', 'co_phone_cell', 'co_email', 'co_marital_status', 'co_citizenship_field', 'co_country_of_residence',
                'co_employer_field', 'co_occupation_field', 'co_period_of_employment', 'co_salary', 'co_pay_period', 'co_employment_status'
            ]);
        });
    }
};
