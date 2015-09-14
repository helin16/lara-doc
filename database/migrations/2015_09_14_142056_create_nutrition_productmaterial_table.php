<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNutritionProductmaterialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nutrition_productmaterial', function (Blueprint $table) {
            $table->integer('nutrition_id')->index();
            $table->integer('productmaterial_id')->index();
            $table->integer('qty');
            $table->integer('servemeasurement_id')->index();
            $table->timestamp('created_at')->index();
            $table->integer('created_by')->index();
            $table->primary(['nutrition_id', 'productmaterial_id'], 'nutrition_productmaterial');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('nutrition_productmaterial');
    }
}
