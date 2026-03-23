<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebhooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('webhooks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('verb')->default('POST');
            $table->string('name');
            $table->string('url');
            $table->unsignedBigInteger('mailinglist_id')->nullable();
            $table->foreign('mailinglist_id')->references('id')->on('mailinglists')->onDelete('cascade');
            $table->boolean('status')->default(1);
            $table->string('handshake_key')->nullable();
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
        Schema::dropIfExists('webhooks');
    }
}
