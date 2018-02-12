<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesImgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles_imgs', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nom');
            $table->string('url');
            /**
             * le type de l'image signifie emplacement ( image moyenne pour l'affiochage
             * en milieu de site ou image petite pour le footeer
             */
            $table->string('type');

            /**
             * indexation sur la table articles
             */
            $table->unsignedInteger('articles');
            $table->foreign('articles')
                ->references('id')->on('articles')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles_imgs');
    }
}
