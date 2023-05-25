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
            $table->string('codigo',50);
            $table->integer('deuda')->length(10);
            $table->unsignedBigInteger('precio');
            $table->foreign('precio')->references('id')->on('precio_agua');
            $table->string('ubicacion',50);
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

