<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bases', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('identifier')->unique();
            $table->string('map');
            $table->string('name')->nullable()->default(null);
            $table->boolean('hasGravity')->default(false);
            $table->boolean('hasTrampoline')->default(false);
            $table->boolean('hasPlatform')->default(false);
            $table->boolean('hasDoublePlatform')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bases');
    }
}
