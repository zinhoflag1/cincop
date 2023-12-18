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
        Schema::create('servicos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome_servico', 70)->comment('Nome do Serviço');
            $table->string('tempo_exec', 20)->comment('Tempo de Execução');
            $table->decimal('valor', 8, 2)->comment('Valor do Serviço');
            $table->string('obs', 150)->comment('Observações');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servicos');
    }
};
