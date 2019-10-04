<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item__users', function (Blueprint $table) {
            $table->increments('id');
            
            $table->unsignedInteger("item_id");
            $table->foreign("item_id")->references("id")->on("items")->onDelete("cascade");
    
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
        Schema::dropIfExists('item__users');
    }
}
