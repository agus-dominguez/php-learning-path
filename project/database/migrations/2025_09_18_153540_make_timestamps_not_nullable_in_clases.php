<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class MakeTimestampsNotNullableInClases extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Primero actualizar los NULLs existentes
        DB::table('clases')
            ->whereNull('created_at')
            ->update(['created_at' => now()]);
            
        DB::table('clases')
            ->whereNull('updated_at')
            ->update(['updated_at' => now()]);

        // Luego modificar las columnas para que no acepten NULL
        Schema::table('clases', function (Blueprint $table) {
            $table->timestamp('created_at')->nullable(false)->change();
            $table->timestamp('updated_at')->nullable(false)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clases', function (Blueprint $table) {
            $table->timestamp('created_at')->nullable()->change();
            $table->timestamp('updated_at')->nullable()->change();
        });
    }
}