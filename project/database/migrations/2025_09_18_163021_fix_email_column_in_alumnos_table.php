<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FixEmailColumnInAlumnosTable extends Migration
{
    public function up()
    {
        Schema::table('alumnos', function (Blueprint $table) {
            // Cambiar email de time a string
            $table->string('email')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('alumnos', function (Blueprint $table) {
            $table->time('email')->nullable()->change();
        });
    }
}