<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVacationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacation', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fechasolicitud');
            $table->date('fechasalida');
            $table->date('fechaincorporacion');
            $table->string('motivo',200);
            $table->integer('id_empleado')->unsigned();
            $table->foreign('id_empleado')->references('id')->on('empleado')
            ->onUpdate('cascade')
            ->onDelete('cascade');
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
        Schema::dropIfExists('vacation');
    }
}
