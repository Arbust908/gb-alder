<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRazasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('razas', function (Blueprint $table) {
            $table->bigIncrements('id');
            /* *** */
            $table->string('nombre');
            $table->text('descripcion');
            $table->unsignedTinyInteger('str');
            $table->unsignedTinyInteger('dex');
            $table->unsignedTinyInteger('con');
            $table->unsignedTinyInteger('int');
            $table->unsignedTinyInteger('wis');
            $table->unsignedTinyInteger('cha');
            $table->text('imageURL');
            $table->unsignedTinyInteger('estado_id');
            /* *** */
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
        Schema::dropIfExists('razas');
    }
}
