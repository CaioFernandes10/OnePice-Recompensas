<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recompensas extends Model
{
    use HasFactory;
    protected $fillable = ['nome','apelido','recompensa','descricao','imagem'];
}
