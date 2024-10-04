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
        Schema::create('monthly_work_applications', function (Blueprint $table) {
            $table->id();
            $table->string('application_for_the_post', 255)->nullable();
            $table->string('surname', 255)->nullable();
            $table->string('christian_names', 255)->nullable();
            $table->string('permanent_address', 255)->nullable();
            $table->string('telephone_no', 255)->nullable();
            $table->string('date_of_birth', 255)->nullable();
            $table->string('nationality', 255)->nullable();
            $table->string('national_registration_no', 255)->nullable();
            $table->string('national_insurance_no', 255)->nullable();
            $table->json('addmore1')->nullable();
            $table->json('addmore2')->nullable();
            $table->json('addmore3')->nullable();
            $table->json('addmore4')->nullable();
            $table->json('addmore5')->nullable();
            $table->string('name_personal_1', 255)->nullable();
            $table->string('address_personal_1', 255)->nullable();
            $table->string('occupation_personal_1', 255)->nullable();
            $table->string('length_personal_1', 255)->nullable();
            $table->string('name_personal_2', 255)->nullable();
            $table->string('address_personal_2', 255)->nullable();
            $table->string('occupation_personal_2', 255)->nullable();
            $table->string('length_personal_2', 255)->nullable();
            $table->string('name_testimonial_1', 255)->nullable();
            $table->string('address_testimonial_1', 255)->nullable();
            $table->string('occupation_testimonial_1', 255)->nullable();
            $table->string('name_testimonial_2', 255)->nullable();
            $table->string('address_testimonial_2', 255)->nullable();
            $table->string('occupation_testimonial_2', 255)->nullable();
            $table->string('signature', 255)->nullable();
            $table->string('any_other_information', 255)->nullable();
            $table->string('date', 255)->nullable();
            $table->string('status', 255)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monthly_work_applications');
    }
};