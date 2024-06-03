<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Favorites extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favorites', function (Blueprint $table) {
           $table->id();
           $table->unsignedBigInteger('user_id');
           $table->foreign('user_id')->references('id')->on('users');
           $table->unsignedBigInteger('entity_item_id');
           $table->foreign('entity_item_id')->references('id')->on('entity_items');
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
        //
    }
}
