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

        Schema::create('application_for_the_purchases', function (Blueprint $table) {
            $table->id();
            $table->string('salutation', 190)->nullable();
            $table->string('applicant_surname', 190)->nullable();;
            $table->string('applicant_first', 190)->nullable();
            $table->string('applicant_middle', 190)->nullable();
            $table->string('applicant_maiden_name', 190)->nullable();
            $table->string('applicant_national_registration_number', 190)->nullable();
            $table->string('applicant_tamis_no', 190)->nullable();
            $table->string('applicant_address', 190)->nullable();
            $table->string('applicant_date_birth', 190)->nullable();
            $table->string('applicant_phone_home', 190)->nullable();
            $table->string('applicant_phone_work', 190)->nullable();
            $table->string('applicant_phone_cell', 190)->nullable();
            $table->string('applicant_email', 190)->nullable();
            $table->string('marital_status', 190)->nullable();
            $table->string('applicant_citizenship', 190)->nullable();
            $table->string('applicant_country_of_residence', 190)->nullable();
            $table->string('coapplicant_salutation', 190)->nullable();
            $table->string('coapplicant_surname', 190)->nullable();
            $table->string('coapplicant_first', 190)->nullable();
            $table->string('coapplicant_middle', 190)->nullable();
            $table->string('coapplicant_maiden_name', 190)->nullable();
            $table->string('coapplicant_national_registration_number', 190)->nullable();
            $table->string('coapplicant_tamis_no', 190)->nullable();
            $table->string('coapplicant_address', 190)->nullable();
            $table->string('coapplicant_date_birth', 190)->nullable();
            $table->string('coapplicant_phone_home', 190)->nullable();
            $table->string('coapplicant_phone_work', 190)->nullable();
            $table->string('coapplicant_phone_cell', 190)->nullable();
            $table->string('applicant_period', 190)->nullable();
            $table->string('co_applicant_period', 190)->nullable();
            $table->string('applicant_occup', 190)->nullable();
            $table->string('co_applicant_occup', 190)->nullable();
            $table->string('applicant_employer', 190)->nullable();
            $table->string('co_applicant_employer', 190)->nullable();
            $table->string('applicant_salary', 190)->nullable();
            $table->string('co_applicant_salary', 190)->nullable();
            $table->string('government', 190)->nullable();
            $table->string('private', 190)->nullable();
            $table->string('self', 190)->nullable();
            $table->string('monthly', 190)->nullable();
            $table->string('weekly', 190)->nullable();
            $table->string('forth_nightly', 190)->nullable();
            $table->string('house_type', 190)->nullable();
            $table->string('purchasing_options', 190)->nullable();
            $table->string('preferedhousetype', 190)->nullable();
            $table->string('no_of_occupants', 190)->nullable();
            $table->string('children_ages', 190)->nullable();
            $table->string('disabilitieswithinthehousehold', 190)->nullable();
            $table->string('alternative', 190)->nullable();
            $table->string('alternative_amount', 190)->nullable();
            $table->string('alternative1', 190)->nullable();
            $table->string('alternative_amount2', 190)->nullable();
            $table->string('areyourenting', 190)->nullable();
            $table->string('ifyeshowmuch', 190)->nullable();
            $table->string('yourownland', 190)->nullable();
            $table->string('tenant', 190)->nullable();
            $table->string('land_or_agent', 190)->nullable();
            $table->string('financethepurchsaseproporty', 190)->nullable();
            $table->string('mortgage_or_loan', 190)->nullable();
            $table->string('the_amount_of_deposit', 190)->nullable();
            $table->string('land_or_property', 190)->nullable();
            $table->string('signature_applican', 190)->nullable();
            $table->string('signature_coapplicant', 190)->nullable();
            $table->string('dateend', 190)->nullable();
            $table->string('recommended_by', 190)->nullable();
            $table->string('approved', 190)->nullable();
            $table->string('date_official', 190)->nullable();
            $table->string('remarks_official', 190)->nullable();
            $table->string('qualifying_amount_official', 190)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('application_for_the_purchases');
    }
};