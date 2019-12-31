<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlreadySearchedSentencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('already_searched_sentences', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('sentence');
            $table->string('plag_percent')->nullable();
            $table->string('unique_percent')->nullable();
            $table->string('link_to_site')->nullable();
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
        Schema::dropIfExists('already_searched_sentences');
    }
}
