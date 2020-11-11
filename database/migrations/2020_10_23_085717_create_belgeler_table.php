<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBelgelerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('belgeler', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('pasaportEkleyin');
            $table->string('diplomaEkleyin');
            $table->string('transkriptEkleyin');
            $table->string('gecerlilikTarih');
            $table->string('dilBelgesiEkleyin');
            $table->foreign('user_id')->references('id')->on('kisiselbilgiler')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('belgeler');
    }
}
