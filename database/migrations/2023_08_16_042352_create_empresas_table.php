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
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome', 110)->comment('Nome da Empress');
            $table->string('fantas', 110)->comment('Nome Fansasia da Empresa');
            $table->string('cnpj', 20)->comment('Cnpj da Empresa');
            $table->string('endereco', 110)->comment('Endereço da Empresa');
            $table->string('numero', 15)->comment('Número do Endereço');
            $table->string('bairro', 50)->comment('Bairro da Empresa');
            $table->string('cidade', 80)->comment('Cidade da Empresa');
            $table->string('estado', 50)->comment('Estado da Empresa');
            $table->string('uf', 5)->comment('UF da Empresa');
            $table->string('cep', 15)->comment('Cep da Empresa');
            $table->string('pont_ref', 15)->comment('Ponto de Referencia Endereço da Empresa');
            $table->string('tel', 15)->comment('Telefone da Empresa');
            $table->string('email', 15)->comment('Email da Empresa');
            $table->string('nom_rep', 110)->comment('Representante da Empresa');
            $table->string('cpf_rep', 15)->comment('CPF do Representante da Empresa');
            $table->string('cel_rep', 15)->comment('Celular do Representante da Empresa');
            $table->string('tel_rep', 15)->comment('Telefone do Representante da Empresa');
            $table->string('email_rep', 15)->comment('Email do Representante da Empresa');
            $table->text('ram_emp')->comment('Ramo de Atividades da Empresa');
            $table->text('atv_emp')->comment('Descrição Atividades da Empresa');
            $table->date('dt_fund')->comment('Data de Fundação da Empresa');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empresas');
    }
};