<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    protected $fillable = ['titulo', 'telefone'];
    public function cliente()
    {
        return $this->belongsTo('\App\Models\Cliente');
    }
    public function addTelefone(Telefone $tel) 
    {
        $this->telefones()->save($tel);
    }
    use HasFactory;
}
