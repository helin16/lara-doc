<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngredientProductmaterialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredient_productmaterial', function (Blueprint $table) {
            $table->integer('ingredient_id')->index();
            $table->integer('productmaterial_id')->index();
            $table->timestamp('created_at')->index();
            $table->integer('created_by')->index();
            $table->primary(['ingredient_id', 'productmaterial_id'], 'ingredient_productmaterial');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ingredient_productmaterial');
    }
}
