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

        Schema::create('afiliados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',50);
            $table->string('apellido_m',50);
            $table->string('apellido_p',50);
            $table->string('celular', 64);
            $table->timestamp('fecha_registro');
            $table->unsignedBigInteger('cod_medidor');
            $table->foreign('cod_medidor')->references('id')->on('medidores');
            $table->string('num_casa',50);
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
        Schema::dropIfExists('afiliados');
    }
};
