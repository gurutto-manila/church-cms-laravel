<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('church_id')->unsigned()->nullable();
            $table->foreign('church_id')->references('id')->on('church'); 
            $table->integer('usergroup_id')->unsigned()->nullable();
            $table->foreign('usergroup_id')->references('id')->on('user_group'); 
            $table->integer('ref_id')->unsigned()->nullable();
            $table->foreign('ref_id')->references('id')->on('users'); 
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('mobile_no');
            $table->string('password');
            $table->string('email_verification_code')->nullable();
            $table->boolean('email_verified')->default('0');
            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('is_reset')->default('0');
            $table->string('platform_token')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
