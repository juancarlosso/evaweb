<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CuentaEspecial extends Model
{
	use HasFactory;
	protected $table = "cuentas_especiales";
	protected $fillable = [
		'nombre',
		'cliente_id',
	];

	/*
    *
    * @brief
    * @author Jorge Ibarra
    * Relación con el modelo cliente
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
	public function cliente()
	{
		return $this->belongsTo(Cliente::class, 'cliente_id');
	}
}
