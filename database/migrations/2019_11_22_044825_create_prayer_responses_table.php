<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrayerResponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prayer_responses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('church_id')->unsigned();
            $table->foreign('church_id')->references('id')->on('church'); 
            $table->bigInteger('prayer_id')->unsigned();
            $table->foreign('prayer_id')->references('id')->on('prayer_requests');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('prayer_responses');
    }
}
