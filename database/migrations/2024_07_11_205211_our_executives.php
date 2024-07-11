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

        Schema::create('our_executives', function (Blueprint $table) {
            $table->id();
            $table->string('photo_path', 255)->nullable();
            $table->string('name_executive', 255)->nullable();
            $table->string('rol_executive', 255)->nullable();
            $table->string('phone_executive', 255)->nullable();
            $table->string('email_executive', 255)->nullable();
            $table->string('facebook_executive', 255)->nullable();
            $table->string('twitter_executive', 255)->nullable();
            $table->string('gplus_executive', 255)->nullable();
            $table->string('linkedin_executive', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('our_executives');
    }
};