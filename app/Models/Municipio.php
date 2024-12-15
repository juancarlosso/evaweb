<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
	use HasFactory;
	protected $table = "municipios";
	protected $fillable = [
		'nombre',
		'estado_id'
	];

	/*
    *
    * @brief
    * @author Jorge Ibarra
    * Relación con el modelo Estado
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
	public function estado()
	{
		return $this->belongsTo(Estado::class, 'estado_id');
	}
}
