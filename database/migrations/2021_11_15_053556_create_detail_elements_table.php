<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailElementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_elements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('element_id')->references('id')->on('elements');
            $table->foreignId('area_id')->references('id')->on('areas');
            $table->foreignId('type_id')->references('id')->on('types');
            $table->longText('description');
            $table->text('image');
            $table->text('video');
            $table->string('source');
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
        Schema::dropIfExists('detail_elements');
    }
}
