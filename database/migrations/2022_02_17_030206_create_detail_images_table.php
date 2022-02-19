<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_images', function (Blueprint $table) {
            $table->id();
            $table->integer('detail_element_id')->unsigned();
            $table->foreign('detail_element_id')->references('id')->on('detail_elements')->onDelete('cascade');
            $table->text('path_image');
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
        Schema::dropIfExists('detail_images');
    }
}
