<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('church_id')->unsigned();
            $table->foreign('church_id')->references('id')->on('church'); 
            $table->enum('select_type',['public','private'])->nullable();
            $table->string('title');
            $table->text('description')->nullable();
            $table->integer('repeats')->nullable()->default(0);
            $table->integer('freq')->nullable()->default(0);
            $table->string('freq_term')->nullable();
            $table->text('location')->nullable();
            $table->enum('category',['prayer','education','meeting','culturals','sermon'])->nullable();
            $table->longtext('organised_by')->nullable();
            $table->text('image')->nullable();
            $table->dateTime('start_date')->nullable();
            $table->dateTime('end_date')->nullable();
            $table->tinyInteger('allDay')->default(0);
            $table->text('url')->nullable();
            $table->integer('created_by')->unsigned()->nullable();
            $table->foreign('created_by')->references('id')->on('users');
            $table->integer('updated_by')->unsigned()->nullable();
            $table->foreign('updated_by')->references('id')->on('users');
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
        Schema::dropIfExists('events');
    }
}
