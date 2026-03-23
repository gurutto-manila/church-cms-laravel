<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGetResponseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('get_response', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('church_id')->unsigned();
            $table->foreign('church_id')->references('id')->on('church');
            $table->unsignedBigInteger('campaign_id')->nullable();
            $table->foreign('campaign_id')->references('id')->on('campaign')->onDelete('cascade');
            $table->text('name');
            $table->unsignedBigInteger('email_open_campaign_id')->nullable();
            $table->foreign('email_open_campaign_id')->references('id')->on('campaign')->onDelete('cascade');
            $table->unsignedBigInteger('no_email_open_campaign_id')->nullable();
            $table->foreign('no_email_open_campaign_id')->references('id')->on('campaign')->onDelete('cascade');
            $table->integer('day_after')->default(0);
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('get_response');
    }
}
