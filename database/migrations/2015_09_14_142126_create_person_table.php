<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('person', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname', 20)->index();
            $table->string('lastname', 20)->index();
            $table->string('email', 100)->index();
            $table->integer('store_id')->index();
            $table->integer('role_id')->index();
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
        Schema::drop('person');
    }
}
