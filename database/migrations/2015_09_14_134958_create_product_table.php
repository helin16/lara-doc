<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name', 100)->unique();
            $table->string('description', 255);
            $table->string('barcode', 20)->index();
            $table->string('used_by_vriance', 20);
            $table->double('unit_price', 10, 4);
            $table->string('label_version_no', 10);
            $table->boolean('active')->index();
            $table->timestamp('created_at')->index();
            $table->integer('created_by')->index();
            $table->timestamp('updated_at')->index();
            $table->integer('updated_by')->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('product');
    }
}
