<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReminderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reminder', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('church_id')->unsigned();
            $table->foreign('church_id')->references('id')->on('church'); 
            $table->text('from');
            $table->text('to');
            $table->text('subject');
            $table->longtext('message');
            $table->integer('entity_id')->nullable();
            $table->string('entity_name')->nullable();
            $table->enum('via',['sms','mail','notification'])->nullable();
            $table->enum('queue_status',['queue','process','deliver','cancel'])->default('queue');
            $table->longText('sms_response')->nullable();
            $table->date('executed_at')->nullable();
            $table->integer('template_id')->nullable();
            $table->longtext('data')->nullable();
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
        Schema::dropIfExists('reminder');
    }
}
