<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMailingListSubscribersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mailing_list_subscribers', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('mailing_list_id');
            $table->unsignedBigInteger('subscribers_id');
            //$table->primary(['id','mailinglist_id', 'subscriber_id']);
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
        Schema::dropIfExists('mailing_list_subscribers');
    }
}
