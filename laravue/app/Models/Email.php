<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Email extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'tb_email';
    protected $primaryKey = 'id_email';

    protected $fillable = [
        'id_email',
        'email'
    ];
}
