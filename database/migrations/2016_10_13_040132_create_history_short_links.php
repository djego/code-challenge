<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoryShortLinks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history_short_links', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('short_link_id')->unsigned();
            $table->string('ip_public');
            $table->timestamps();

            $table->foreign('short_link_id')->references('id')->on('short_links');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('history_short_links');

    }
}
