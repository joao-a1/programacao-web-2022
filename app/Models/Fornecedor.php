<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Produto;

class Fornecedor extends Model
{
    use HasFactory;
    protected $table = "fornecedores";

    function produtos(){
        return $this->hasMany(Produto::class, 'id_fornecedor', 'id');
    }
}
