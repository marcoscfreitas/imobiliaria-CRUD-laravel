<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImobiliariasTable extends Migration
{
    public function up()
    {
        Schema::create('imobiliarias', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('endereco');
            $table->decimal('preco', 10, 2);
            $table->decimal('aluguel', 10, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('imobiliarias');
    }
}
