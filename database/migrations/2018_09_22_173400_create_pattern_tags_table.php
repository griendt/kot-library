<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatternTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pattern_tags', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('tag_id')->unsigned();
            $table->integer('pattern_id')->unsigned();
        });

        Schema::table('pattern_tags', function (Blueprint $table) {
            $table->foreign('tag_id')->references('id')->on('tags');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pattern_tags');
    }
}
