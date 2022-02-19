<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailAudioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_audio', function (Blueprint $table) {
            $table->id();
            $table->integer('detail_element_id')->unsigned();
            $table->foreign('detail_element_id')->references('id')->on('detail_elements')->onDelete('cascade');
            $table->string('name_audio');
            $table->text('path_audio');
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
        Schema::dropIfExists('detail_audio');
    }
}
