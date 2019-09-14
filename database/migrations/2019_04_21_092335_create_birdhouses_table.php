<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBirdhousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('birdhouses', function (Blueprint $table) {
            // creer les colonnes de la BDD
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('image');
            $table->string('description');
            $table->string('adresse');
            $table->float('latitude', 20, 14);
            $table->float('longitude', 20, 14);
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
        Schema::dropIfExists('birdhouses');
    }
}
