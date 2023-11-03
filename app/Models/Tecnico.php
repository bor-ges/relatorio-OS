<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tecnico extends Model
{
    use HasFactory;

    protected $table = 'sistema-os';

    protected $primaryKey = 'id';
    protected $fillable = [
        'numero_os',
        'tecnico_resp',
        'inicio',
        'fim',
        'tipo_os',
        'materiais',
        'sem_danos',
        'com_danos',
        'funcionamento',
        'servico_exec',
        'insento_cobranca',
        'servico_cobrado',
        'cli_nome',
        'cli_endereco',
        'cli_assinatura'

    ];
}
