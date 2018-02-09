<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('prenoms');
            $table->string('mail')->unique;
            $table->string('contact');
            $table->string('adresse');
            $table->string('fonction');
            $table->unsignedInteger('services');
            $table->foreign('services')
                ->references('id')->on('services')
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
        Schema::dropIfExists('personels');
    }
}
