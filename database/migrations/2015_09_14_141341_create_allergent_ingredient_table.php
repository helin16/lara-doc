<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllergentIngredientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allergent_ingredient', function (Blueprint $table) {
            $table->integer('ingredient_id')->index();
            $table->integer('allergent_id')->index();
            $table->timestamp('created_at')->index();
            $table->integer('created_by')->index();
            $table->primary(['ingredient_id', 'allergent_id'], 'ingredient_allergent');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('allergent_ingredient');
    }
}
