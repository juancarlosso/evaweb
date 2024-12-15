<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoEstimacion extends Model
{
	use HasFactory;
	protected $table = "tipos_estimaciones";
	protected $fillable = [
		'nombre',
		'activo',
	];
}
