<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_videos', function (Blueprint $table) {
            $table->id();
            $table->integer('detail_element_id')->unsigned();
            $table->foreign('detail_element_id')->references('id')->on('detail_elements')->onDelete('cascade');
            $table->text('path_video');
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
        Schema::dropIfExists('detail_videos');
    }
}
