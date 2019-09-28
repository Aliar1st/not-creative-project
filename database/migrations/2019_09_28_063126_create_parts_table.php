<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('number');
            $table->unsignedBigInteger('parent_product_id');
            $table->unsignedBigInteger('child_product_id');
            $table->timestamps();

            $table->foreign('parent_product_id')
                ->references('id')->on('products')
                ->onDelete('cascade');

            $table->foreign('child_product_id')
                ->references('id')->on('products')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parts');
    }
}
