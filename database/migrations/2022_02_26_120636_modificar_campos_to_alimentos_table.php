<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('alimentos', function (Blueprint $table) {
            // $table->string('nombre',150)->change();
            // $table->integer('kcal',50)->nullable()->change();
            // $table->integer('proteinas',30)->nullable()->change();
            // $table->integer('hidratos',60)->nullable()->change();
            // $table->integer('azucares',40)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('alimentos', function (Blueprint $table) {
        //   $table->integer('kcal',11)->change();
        });
    }
};
