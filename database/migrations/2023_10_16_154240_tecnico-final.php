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
        Schema::create('personal_access_tokens', function (Blueprint $table) {
            $table->id();
            $table->string('numero_os')->nullable();
            $table->string('tecnico_resp')->nullable();
            $table->string('inicio')->nullable();
            $table->string('fim')->nullable();
            $table->string('tipo_os')->nullable();
            $table->string('materiais')->nullable();
            $table->string('sem_danos')->nullable();
            $table->string('com_danos')->nullable();
            $table->string('funcionamento')->nullable();
            $table->string('serviço_exec')->nullable();
            $table->string('isento_cobranca')->nullable();
            $table->string('servico_cobrado')->nullable();
            $table->string('cli_nome')->nullable();
            $table->string('cli_endereco')->nullable();
            $table->string('cli_assinatura')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
