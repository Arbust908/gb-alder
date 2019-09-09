<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAventurasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aventuras', function (Blueprint $table) {
            $table->bigIncrements('id');
            // *** //
            $table->string('nombre');
            $table->text('descripcion');
            $table->text('imageURL');
            $table->unsignedTinyInteger('estado_id');
            // *** //
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aventuras');
    }
}
