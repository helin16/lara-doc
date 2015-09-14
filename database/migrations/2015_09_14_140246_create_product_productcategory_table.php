<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductProductcategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('product_productcategory', function (Blueprint $table) {
            $table->integer('product_id')->index();
            $table->integer('productcategory_id')->index();
            $table->timestamp('created_at')->index();
            $table->integer('created_by')->index();
            $table->primary(['product_id', 'productcategory_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('product_productcategory');
    }
}
