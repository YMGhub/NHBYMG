<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('api_settings', function (Blueprint $table) {
            $table->id();
            $table->string('api_url')->nullable();
            $table->string('auth_key')->nullable();
            $table->string('auth_value')->nullable();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('api_settings');
    }
};
