<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChurchDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('church_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('church_id')->unsigned();
            $table->foreign('church_id')->references('id')->on('church');
            //$table->longtext('short_summary');
            //$table->longtext('long_summary');
            //$table->longtext('quotes')->nullable();
            //$table->string('church_logo')->nullable();
            //$table->enum('method',['cheque','card','cash','demanddraft','bank'])->nullable();
            //$table->longText('bank_details')->nullable();
            $table->string('meta_key')->nullable();
            $table->LongText('meta_value')->nullable();
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
        Schema::dropIfExists('church_details');
    }
}
