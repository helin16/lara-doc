<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductStoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('product_store', function (Blueprint $table) {
            $table->integer('product_id')->index();
            $table->integer('store_id')->index();
            $table->timestamp('created_at')->index();
            $table->integer('created_by')->index();
            $table->primary(['product_id', 'store_id'], 'product_store');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('product_store');
    }
}
