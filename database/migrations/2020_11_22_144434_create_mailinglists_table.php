<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMailinglistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mailinglists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('church_id')->unsigned();
            $table->foreign('church_id')->references('id')->on('church');
            $table->enum('scope', ['subscription', 'campaign', 'segment'])->default('subscription');
            $table->string('name')->unique();
            $table->text('description')->nullable();
            $table->boolean('is_published')->default(1);            
            $table->text('slug');
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
        Schema::dropIfExists('mailinglists');
    }
}
