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
        Schema::create('contatos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('tb_nome', 20)->comment('Nome da Tabela');
            $table->integer('tb_id')->comment('Identificador da Tabela');
            $table->set('tipos', ['tel', 'cel', 'email'])->comment('Tipo do Contato');
            $table->string('val', 80)->comment('Contato');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contatos');
    }
};
