<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcotorWorkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actor_work', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('work_id');
            $table->foreign('work_id')->references('id')->on('works');
            $table->unsignedBigInteger('actor_id');
            $table->foreign('actor_id')->references('id')->on('actors');
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
        Schema::dropIfExists('actor_work');
    }
}
