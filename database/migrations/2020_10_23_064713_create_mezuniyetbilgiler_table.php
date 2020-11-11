<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMezuniyetbilgilerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mezuniyetbilgiler', function (Blueprint $table) {
                $table->bigIncrements('id');
            $table->integer('user_id');
            $table->float('diplomaNot');
            $table->string('ulkeSec');
            $table->string('universiteSec');
            $table->string('dusunce');

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
        Schema::dropIfExists('mezuniyetbilgiler');
    }
}
