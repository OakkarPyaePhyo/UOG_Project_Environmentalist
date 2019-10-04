<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event__users', function (Blueprint $table) {
            $table->increments('id');
            
            $table->unsignedInteger("event_id");
            $table->foreign("event_id")->references("id")->on("events")->onDelete("cascade");

            $table->unsignedInteger("user_id");
            $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");
            
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
        Schema::dropIfExists('event__users');
    }
}
