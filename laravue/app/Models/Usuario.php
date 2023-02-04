<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Usuario extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'tb_usuario';
    protected $primaryKey = 'id_usuario';

    protected $fillable = [
        'id_usuario',
        'nome',
        'cpf',
        'rg',
        'nome_mae',
        'nome_pai',
        'fk_id_endereco',
        'fk_id_email',
    ];

    public function endereco() {
        return $this->hasOne(Endereco::class, 'fk_id_endereco', 'id_usuario');
    }

    public function email() {
        return $this->hasOne(Email::class, 'fk_id_email', 'id_usuario');
    }
}
