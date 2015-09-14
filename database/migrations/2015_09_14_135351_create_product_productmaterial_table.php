<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductProductmaterialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_productmaterial', function (Blueprint $table) {
            $table->integer('product_id')->index();
            $table->integer('productmaterial_id')->index();
            $table->integer('qty');
            $table->string('measurement');
            $table->timestamp('created_at')->index();
            $table->integer('created_by')->index();
            $table->primary(['product_id', 'productmaterial_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('product_productmaterial');
    }
}
