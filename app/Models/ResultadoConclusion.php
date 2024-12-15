<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResultadoConclusion extends Model
{
	use HasFactory;
	protected $table = "resultados_conclusiones";
	protected $fillable = [
		'nombre',
		'activo',
	];
}
