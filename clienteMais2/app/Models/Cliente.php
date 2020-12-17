<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['nome', 'email', 'endereco', 'titulo', 'telefone'];

    public function telefones()
    {
        return $this->hasMany('\App\Models\Telefone');
    }
    public function addTelefone(Telefone $tel)
    {
        return $this->telefones()->save($tel);
    }
    public function deletarTelefones()
    {
        foreach($this->telefones as $tel){
            $tel->delete();
        }
        return true;
    }
    use HasFactory;
}
