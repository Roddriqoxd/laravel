<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        
        Schema::create('medidores', function (Blueprint $table) {
            $table->id();
            $table->string('Codigo',50);
            $table->integer('deuda_bs')->length(10);
            $table->integer('mes')->length(10);
            // $table->integer('precio')->length(20);
            $table->unsignedBigInteger('precio');
            $table->foreign('precio')->references('id')->on('precio_agua');

            $table->string('direccion',50);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medidores');
    }
};
