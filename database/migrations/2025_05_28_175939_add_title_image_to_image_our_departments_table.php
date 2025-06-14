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
        Schema::table('image_our_departments', function (Blueprint $table) {
            //
             $table->text('title_image')->after('our_departments_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('image_our_departments', function (Blueprint $table) {
            //
             $table->dropColumn('title_image');
        });
    }
};
