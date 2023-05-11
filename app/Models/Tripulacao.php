<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tripulacao extends Model
{
    use HasFactory;
    public function tripulacao(){

        return $this->hasMany(Tripulacao::class);
    }
}
