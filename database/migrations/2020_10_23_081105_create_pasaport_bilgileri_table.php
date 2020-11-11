<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasaportBilgileriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasaportbilgileri', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('kimlik');
            $table->string('pasaportNumber');
            $table->string('dogumTarih');
            $table->string('duzenlemeTarih');
            $table->string('gecerlilikTarih');
            $table->string('uyruk');
            $table->string('pasaportTur');
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
        Schema::dropIfExists('pasaportbilgileri');
    }
}
