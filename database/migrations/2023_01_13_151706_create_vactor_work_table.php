<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVactorWorkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vactor_work', function (Blueprint $table) {
            $table->unsignedBigInteger('work_id');
            $table->unsignedBigInteger('vactor_id');

            $table->foreign('work_id')
            ->references('id')
            ->on('works')
            ->onDelete('cascade');

            $table->foreign('vactor_id')
            ->references('id')
            ->on('vactors')
            ->onDelete('cascade');

            $table->timestamps();;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vactor_work');
    }
}
