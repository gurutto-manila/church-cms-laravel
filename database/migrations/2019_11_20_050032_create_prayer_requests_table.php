<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrayerRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prayer_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('church_id')->unsigned();
            $table->foreign('church_id')->references('id')->on('church'); 
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->longText('image')->nullable();
            $table->longText('audio')->nullable();
            $table->dateTime('date')->nullable();
            $table->dateTime('approved_at')->nullable();
            $table->dateTime('publish_at')->nullable();
            $table->dateTime('expire_at')->nullable();
            $table->enum('status', ['pending','approve','closed','cancel'])->nullable();
            $table->longText('comments')->nullable();
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
        Schema::dropIfExists('prayer_requests');
    }
}
