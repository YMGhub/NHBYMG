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
        Schema::create('application_rentals', function (Blueprint $table) {
            $table->id();
            $table->string('applicant_surname',255)->nullable();
            $table->string('applicant_first',255)->nullable();
            $table->string('applicant_middle',255)->nullable();
            $table->string('applicant_address',255)->nullable();
            $table->string('co_applicant_surname',255)->nullable();
            $table->string('co_applicant_name',255)->nullable();
            $table->string('co_applicant_middle',255)->nullable();
            $table->string('co_applicant_address',255)->nullable();
            $table->bigInteger('national_registration_number')->nullable();;
            $table->string('employer',255)->nullable();
            $table->string('occupation',255)->nullable();
            $table->string('citizenship',255)->nullable();
            $table->string('income',255)->nullable();
            $table->integer('size_of_family')->nullable();
            $table->integer('adults')->nullable();
            $table->integer('children')->nullable();
            $table->string('own_landorproperty',255)->nullable();
            $table->string('state_address',255)->nullable();
            $table->string('financial_institution',255)->nullable();
            $table->string('give_details',255)->nullable();
            $table->string('occupedaunit',255)->nullable();
            $table->text('photograph')->nullable();
            $table->json('addmore')->nullable();
            $table->string('tenantorlodger',255)->nullable();
            $table->string('addressoflandlord',255)->nullable();
            $table->date('present_accommodation',255)->nullable();
            $table->string('structureofhouse',255)->nullable();
            $table->date('rental_date')->nullable();
            $table->string('typeofsanityfacilities',255)->nullable();
            $table->string('water_supply',255)->nullable();
            $table->text('housingofficercomments')->nullable();
            $table->string('acknowledged',255)->nullable();
            $table->string('dayof',255)->nullable();
            $table->string('year',255)->nullable();
            $table->string('by',255)->nullable();
            $table->string('keysreceived',255)->nullable();
            $table->string('thiskeys',255)->nullable();
            $table->string('dayofkeys',255)->nullable();
            $table->string('yearkeys',255)->nullable();
            $table->string('whitnessed',255)->nullable();
            $table->string('thiswhitnessed',255)->nullable();
            $table->string('dayofwhitnessed',255)->nullable();
            $table->string('yearwhitnessed',255)->nullable();
            $table->string('housingofficer',255)->nullable();
            $table->string('signatures',255)->nullable();
            $table->string('datedthis',255)->nullable();
            $table->string('dayofdatedthis',255)->nullable();
            $table->string('yeardatedthis',255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('application_rentals');
    }
};
