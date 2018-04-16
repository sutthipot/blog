<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGarageregistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('garageregisters', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_ID');
            $table->string('tel');
            $table->string('description');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('status')->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('garageregisters');
    }
}
