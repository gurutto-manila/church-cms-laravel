<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibraryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('library', function (Blueprint $table) {
             $table->increments('id');
             $table->integer('church_id')->unsigned();
             $table->foreign('church_id')->references('id')->on('church'); 
              $table->integer('library_group_id')->unsigned();
              $table->foreign('library_group_id')->references('id')->on('library_group'); 
             $table->text('title');
             $table->longtext('description');
             $table->longtext('path');
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
        Schema::dropIfExists('library');
    }
}
