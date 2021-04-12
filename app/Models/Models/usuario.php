<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    use HasFactory;

    protected $tabel = 'usuarios';
    protected $fillable = [
        'idusuario',
        'tipo',
        'nome',
        'email',
        'senha',
    ];
}
