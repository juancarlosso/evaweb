<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoExpediente extends Model
{
	use HasFactory;
	protected $table = "tipos_expedientes";
	protected $fillable = [
		'nombre',
		'activo',
	];
}
