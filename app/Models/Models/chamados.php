<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chamados extends Model
{
    use HasFactory;
    protected $tabel = 'chamados';
    protected $fillable = [
            'id',
            'idusuario',
            'idprefeitura',
            'tipo',
            'status',
            'rua',
            'bairro',
            'cidade',
            'observacao',
    ];
}
