<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SituacionTercero extends Model
{
	use HasFactory;
	protected $table = "situaciones_terceros";
	protected $fillable = [
		'nombre',
		'activo',
	];
}
