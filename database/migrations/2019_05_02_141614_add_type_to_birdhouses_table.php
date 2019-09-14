<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTypeToBirdhousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('birdhouses', function (Blueprint $table) {
            $table->integer('id_type')->nullable();
            $table->foreign('id_type')->references('id')->on('types_birdhouses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('birdhouses', function (Blueprint $table) {
            $table->dropForeign(['id_type']);
            $table->dropColumn('id_type');
        });
    }
}
