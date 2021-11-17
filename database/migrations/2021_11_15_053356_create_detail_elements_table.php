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
            $table->integer('element_id');
            $table->integer('area_id');
            $table->integer('type_id');
            $table->string('title');
            $table->string('description');
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
