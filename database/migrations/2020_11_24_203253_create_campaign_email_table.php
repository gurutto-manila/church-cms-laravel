<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampaignEmailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaign_email', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('church_id')->unsigned();
            $table->foreign('church_id')->references('id')->on('church');
            $table->unsignedBigInteger('campaign_id')->unsigned();
            $table->foreign('campaign_id')->references('id')->on('campaign');
            $table->unsignedBigInteger('email_id')->unsigned();
            $table->foreign('email_id')->references('id')->on('emails');
            $table->integer('delay_in_days')->default(0);
            $table->time('delay_in_hours')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campaign_email');
    }
}
