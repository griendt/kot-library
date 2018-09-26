<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLayoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('layouts', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('base_identifier');
            $table->integer('trap_1_identifier');
            $table->integer('trap_2_identifier');
            $table->integer('trap_3_identifier');
            $table->string('design_picture');
            $table->string('design_solution');
            $table->string('design_comment');
        });

        Schema::table('layouts', function (Blueprint $table) {
            $table->foreign('base_identifier')->references('identifier')->on('bases');
            $table->foreign('trap_1_identifier')->references('identifier')->on('traps');
            $table->foreign('trap_2_identifier')->references('identifier')->on('traps');
            $table->foreign('trap_3_identifier')->references('identifier')->on('traps');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('layouts');
    }
}
