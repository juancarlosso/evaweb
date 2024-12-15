<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoAutoridad extends Model
{
	use HasFactory;
	protected $table = "tipos_autoridad";
	protected $fillable = [
		'nombre',
		'activo',
	];
}
