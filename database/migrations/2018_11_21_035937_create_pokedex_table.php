<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePokedexTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pokedex', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('types');
            $table->integer('height');
            $table->integer('weight');
            $table->string('abilities');
            $table->string('egg_groups');
            $table->string('stats');
            $table->string('genus');
            $table->string('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
