<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('price');
            $table->date('beging');
            $table->date('ending');
            $table->date('limit');
            $table->integer('quantity')->nullable();
            $table->string('description');
            $table->enum('statusTicket',[
                'En espera de Aprobacion',
                'Oferta Aprobada',
                'Oferta Rechazada',
                'Oferta Descartada'
            ])->default('En espera de Aprobacion');
            $table->string('image',100)->nullable(); 
            $table->foreignId('company_id')->constrained();
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
        Schema::dropIfExists('tickets');
    }
}
