<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $table = "clientes";
    protected $fillable = [
		'rfc',
		'razon_social',
		'alias',
		'calle',
		'num_ext',
		'num_int',
		'cp',
		'colonia',
		'municipio',
		'ciudad',
		'logotipo',
		'activo'
    ];
}
