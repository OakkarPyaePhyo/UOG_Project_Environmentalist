<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('location1');
            $table->string('location2');
            $table->string('location3');
            $table->string('location4');
            $table->string('location5');
            $table->string('location6');
            $table->string('location7');
            $table->string('location8');
            $table->string('location9');
            $table->string('location10');
            $table->string('location11');
            $table->string('location12');
            $table->string('location13');
            $table->string('location14');
            $table->string('location15');
            $table->string('location16');
            $table->string('location17');
            $table->string('location18');
            $table->string('location19');
            $table->string('location20');
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
        Schema::dropIfExists('maps');
    }
}
