<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cvs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('age');
            $table->string('address');
            $table->string('email');
            $table->integer('phone');
            $table->string('experience');
            $table->text('avatar');
            $table->string('skill1');
            $table->integer('html_css');
            $table->string('skill2');
            $table->integer('php');
            $table->string('skill3');
            $table->integer('laravel');
            $table->string('skill4');
            $table->integer('wordpress');
            $table->string('design');
            $table->string('themes');
            $table->string('user_experience');
            $table->string('support');
            $table->string('description');
            $table->string('introduce');
            $table->string('company');
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
        Schema::dropIfExists('cvs');
    }
}
