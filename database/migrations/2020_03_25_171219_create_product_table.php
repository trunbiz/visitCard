<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable();
            $table->integer('price')->nullable();
            $table->integer('sale')->nullable();
            $table->string('size')->nullable();
            $table->string('color')->nullable();
            $table->integer('count')->nullable();
            $table->text('content')->nullable();
            $table->text('coverimg')->nullable();
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
        Schema::dropIfExists('product');
    }
}
