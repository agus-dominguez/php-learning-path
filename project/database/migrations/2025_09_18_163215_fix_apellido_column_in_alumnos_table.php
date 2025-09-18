<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FixApellidoColumnInAlumnosTable extends Migration
{
    public function up()
    {
        Schema::table('alumnos', function (Blueprint $table) {
            $table->string('apellido')->change(); // Cambiar de text a string
        });
    }

    public function down()
    {
        Schema::table('alumnos', function (Blueprint $table) {
            $table->text('apellido')->change();
        });
    }
}