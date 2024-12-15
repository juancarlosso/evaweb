<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoberturaPoliza extends Model
{
	use HasFactory;
	protected $table = "coberturas_poliza";
	protected $fillable = [
		'nombre',
		'activo',
	];
}
