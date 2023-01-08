<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoiceAcotorWorkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voice_actor_work', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('work_id');
            $table->foreign('work_id')->references('id')->on('works');
            $table->unsignedBigInteger('voice_actor_id');
            $table->foreign('voice_actor_id')->references('id')->on('voice_actors');
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
        Schema::dropIfExists('voice_actor_work');
    }
}
