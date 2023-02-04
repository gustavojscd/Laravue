<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Formulario extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'tb_formulario';
    protected $primaryKey = 'id_formulario';

    protected $fillable = [
        'id_formulario',
        'fk_id_usuario',
        'imagem'
    ];

    public function usuario () {
        return $this->hasOne(Usuario::class, 'fk_id_usuario', 'id_formulario');
    }
}
