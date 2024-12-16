<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormaConclusion extends Model
{
	use HasFactory;
	protected $table = "formas_conclusion";
	protected $fillable = [
		'nombre',
		'activo',
	];
}
