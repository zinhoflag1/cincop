<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('materiais', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome_material', 70)->comment('Nome do Material');
            $table->integer('fornecedor_id')->comment('Fornecedor');
            $table->string('peso', 10)->comment('Peso do Material');
            $table->string('marca', 20)->comment('Marca do Material');
            $table->string('modelo', 20)->comment('Modelo do Material');
            $table->decimal('valor', 8, 2)->comment('Valor do Material');
            $table->string('cod_bara', 30)->comment('Código de Barras');
            $table->date('validade', 11)->comment('Validade do Material');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materiais');
    }
};
