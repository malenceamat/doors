<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ItemsStats extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items_stats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('entity_item_id');
            $table->foreign('entity_item_id')->references('id')->on('entity_items');
            $table->unsignedBigInteger('stats_name_id');
            $table->foreign('stats_name_id')->references('id')->on('stats_names');
            $table->unsignedBigInteger('stats_value_id');
            $table->foreign('stats_value_id')->references('id')->on('stats_values');
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
        Schema::dropIfExists('items_stats');
    }
}
