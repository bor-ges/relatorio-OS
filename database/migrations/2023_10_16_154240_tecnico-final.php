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
        Schema::create('sistema-os', function (Blueprint $table) {
            $table->id();
            $table->string('numero_os')->nullable();
            $table->string('tecnico_resp')->nullable();
            $table->string('inicio')->nullable();
            $table->string('fim')->nullable();
            $table->string('tipo_os')->nullable();
            $table->string('materiais')->nullable();
            $table->string('sem_danos');
            $table->string('com_danos');
            $table->string('funcionamento');
            $table->string('serviço_exec');
            $table->string('isento_cobranca');
            $table->string('servico_cobrado');
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
