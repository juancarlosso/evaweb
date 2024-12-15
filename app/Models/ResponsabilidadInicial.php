<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResponsabilidadInicial extends Model
{
	use HasFactory;
	protected $table = "responsabilidades_iniciales";
	protected $fillable = [
		'nombre',
		'activo',
	];
}
