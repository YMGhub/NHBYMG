<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('our_executives', function (Blueprint $table) {
            $table->dropColumn('photo_path'); // Elimina la columna existente
        });

        Schema::table('our_executives', function (Blueprint $table) {
            $table->binary('photo_path')->nullable(); // Vuelve a crearla como BLOB
        });
    }

    public function down()
    {
        Schema::table('our_executives', function (Blueprint $table) {
            $table->dropColumn('photo_path'); // Elimina la columna BLOB
        });

        Schema::table('our_executives', function (Blueprint $table) {
            $table->string('photo_path', 255)->nullable(); // La vuelve a crear como string en caso de rollback
        });
    }
};
