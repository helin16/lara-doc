<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLabelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('label', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id')->index();
            $table->string('product_name');
            $table->dateTime('printed_date')->index();
            $table->dateTime('use_by_date')->index();
            $table->integer('printed_by')->index();
            $table->double('printed_price', 10, 4);
            $table->string('version_no', 20)->index();
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
        Schema::drop('label');
    }
}
