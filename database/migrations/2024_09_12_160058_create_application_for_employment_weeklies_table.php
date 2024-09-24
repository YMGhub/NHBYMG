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
        Schema::create('application_for_employment_weeklies', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->nullable();
            $table->string('address', 255)->nullable();
            $table->string('telephone_no', 255)->nullable();
            $table->string('citizenship', 255)->nullable();
            $table->string('date_of_birth', 255)->nullable();
            $table->string('national_registration_no', 255)->nullable();
            $table->string('nis_no', 255)->nullable();
            $table->boolean('Masonry')->default(false);
            $table->boolean('Carpentry')->default(false);
            $table->boolean('Painting')->default(false);
            $table->boolean('Electrical')->default(false);
            $table->boolean('Plumbing')->default(false);
            $table->boolean('Labourer')->default(false);
            $table->boolean('Other')->default(false);
            $table->string('work_experience', 255)->nullable();
            $table->string('education_qualification', 255)->nullable();
            $table->string('refereejob_name', 255)->nullable();
            $table->string('refereejob_address', 255)->nullable();
            $table->string('refereejob_lenght_of_time', 255)->nullable();
            $table->string('refereejob_name_2', 255)->nullable();
            $table->string('refereejob_address_2', 255)->nullable();
            $table->string('refereejob_lenght_of_time_2', 255)->nullable();
            $table->string('any_other_information', 255)->nullable();
            $table->string('signature', 255)->nullable();
            $table->string('date', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('application_for_employment_weeklies');
    }
};