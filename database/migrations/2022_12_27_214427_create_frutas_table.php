<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFrutasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frutas', function (Blueprint $table) {
            $table->id();
            $table->string('fruta');
            $table->string('fruta_codigo');
            $table->integer('fruta_precio');
            $table->integer('fruta_cantidad');
            $table->integer('fruta_impuesto');
            $table->timestamp('fecha');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('frutas');
    }
}
