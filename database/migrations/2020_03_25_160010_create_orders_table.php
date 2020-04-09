<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('tel');
            $table->unsignedBigInteger('master_id');
            $table->string('service');
            $table->date('date');
            $table->string('time')->nullable();
            $table->integer('price')->nullable();
            $table->timestamps();
        });

        /* Schema::table('orders', function (Blueprint $table) {
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
        Schema::dropIfExists('orders');
    }
}
