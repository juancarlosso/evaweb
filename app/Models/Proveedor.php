<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;
    protected $table = "proveedores";
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
		'tipos_asistencias',
		'activo'
    ];
}
