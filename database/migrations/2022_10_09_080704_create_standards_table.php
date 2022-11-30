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
        Schema::create('standards', function (Blueprint $table) {
            $table->id();
            $table->foreignId('location_id');
            $table->foreignId('trademark_id');
            $table->string('catalog');
            $table->string('name');
            $table->string('slug');
            $table->string('batch')->unique();
            $table->string('departement');
            $table->string('storage');
            $table->integer('number');
            $table->integer('contain');
            $table->string('brand');
            $table->date('expired');
            $table->integer('content');
            $table->integer('stock');
            $table->integer('openned');
            $table->integer('outofstock');
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
        Schema::dropIfExists('standards');
    }
};
