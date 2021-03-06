<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('intitule')->unique;
            $table->string('description');
            $table->string('lienImage');
            $table->unsignedInteger('categories');
            $table->foreign('categories')
                ->references('id')->on('categories')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->timestamps();
            $table->string('priorite');
            $table->string('statut');
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
