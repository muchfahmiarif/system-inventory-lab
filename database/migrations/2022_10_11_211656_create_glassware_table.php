<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('glassware', function (Blueprint $table) {
            $table->id();
            $table->foreignId('shape_id');
            $table->foreignId('color_id');
            $table->integer('catalog');
            $table->string('name');
            $table->string('batch');
            $table->string('type');
            $table->integer('volume');
            $table->timestamp('published_at')->nullable();
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
        Schema::dropIfExists('glassware');
    }
};
