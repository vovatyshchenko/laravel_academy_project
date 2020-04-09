<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            //$table->string('name');
            $table->unsignedBigInteger('master_id');
            $table->date('date');
            $table->timestamps();
        });

       /* Schema::table('schedules', function (Blueprint $table) {
            $table->foreign('master_id')
                ->references('id')
                ->on('masters')
                ->onDelete('cascade');
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedules');
    }
}
