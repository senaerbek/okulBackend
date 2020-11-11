<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKisiselbilgilerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kisiselBilgiler', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ad');
            $table->string('soyad');
            $table->string('email');
            $table->string('tel');
            $table->string('departman');

    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kisiselbilgiler');
    }
}
