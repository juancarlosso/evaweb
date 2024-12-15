<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResponsabilidadFinal extends Model
{
	use HasFactory;
	protected $table = "responsabilidades_finales";
	protected $fillable = [
		'nombre',
		'activo',
	];
}
