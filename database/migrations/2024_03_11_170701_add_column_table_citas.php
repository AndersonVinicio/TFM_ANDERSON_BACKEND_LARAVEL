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
        //
        Schema::table('table_citas', function (Blueprint $table) {
            $table->string('trabajo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('tabla_a_modificar', function (Blueprint $table) {
            $table->dropColumn('nueva_columna');
        });
    }
};
