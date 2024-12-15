<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EtapaCabina extends Model
{
	use HasFactory;
	protected $table = "etapas_cabina";
	protected $fillable = [
		'nombre',
		'activo',
	];
}
