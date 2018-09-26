<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatternsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patterns', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name');
            $table->string('map');
            $table->integer('trap_1_identifier')->nullable();
            $table->integer('trap_2_identifier')->nullable();
            $table->integer('trap_3_identifier')->nullable();
            $table->boolean('needs_platform')->default(false);
            $table->boolean('needs_double_platform')->default(false);
            $table->boolean('needs_gravity')->default(false);
            $table->boolean('needs_trampoline')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patterns');
    }
}
