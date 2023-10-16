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
        Schema::create('orcamentos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('cliente_id')->comment('Identificador da Cliente');
            $table->string('cliente_nome', 70)->comment('Nome Cliente');
            $table->string('cpfcnpj', 20)->comment('CPF/CNPJ do Cliente');
            $$table->date('dt_orcamento', 11)->comment('Data do Orçamento');
            $table->string('obs', 150)->comment('Observações');
            $table->string('form_pg', 40)->comment('Forma de Pagamento');
            $table->string('validade', 15)->comment('Validade do Orçamento');
            $table->string('status', 10)->comment('Status do Orçamento');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orcamentos');
    }
};
