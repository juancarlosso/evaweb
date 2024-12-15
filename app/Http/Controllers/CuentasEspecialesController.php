<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

use App\Models\CuentaEspecial;
use App\Models\Clientes;

class CuentasEspecialesController extends Controller
{

	/*
    *
    * @brief
    * @author Jorge Ibarra
    * @param string
    * @return
    *
    */
	public function index()
	{
		$cuentas_especiales = CuentaEspecial::with('cliente')->paginate(config('constantes.itemsPorPagina'));
		$clientes=Cliente::all();
		return view('cuentas_especiales.index',compact('clientes'))->with('cuentas_especiales', $cuentas_especiales);
	}

	/*
    *
    * @brief
    * @author Jorge Ibarra
    * @param string
    * @return
    *
    */
	public function create()
	{
		return view('cuentas_especiales.create');
	}

	/*
    *
    * @brief
    * @author Jorge Ibarra
    * @param string
    * @return
    *
    */
	public function store(Request $request)
	{
		$cuenta_especial = CuentaEspecial::create($request->all());
		return redirect()->route('cuentas_especiales.index')->with('success', 'La cuenta especial ha sido creado');
	}

	/*
    *
    * @brief
    * @author Jorge Ibarra
    * @param string
    * @return
    *
    */
	public function destroy(Request $request, $id)
	{
		$cuenta_especial = CuentaEspecial::findOrFail($id);
		$cuenta_especial->delete();
		return redirect()->route('cuentas_especiales.index')
			->with('success', 'La cuenta especial ha sido eliminado');
	}

	/*
    *
    * @brief
    * @author Jorge Ibarra
    * @param string
    * @return
    *
    */
	public function edit($id)
	{
		$cuenta_especial = CuentaEspecial::findOrFail($id);
		return response()->json($cuenta_especial);
	}

	/*
    *
    * @brief
    * @author Jorge Ibarra
    * @param string
    * @return
    *
    */
	public function update(Request $request, $id)
	{
		$cuenta_especial = CuentaEspecial::findOrFail($id);
		$cuenta_especial->update($request->all());
		$cuenta_especial->save();
		

		return redirect()->route('cuentas_especiales.index')->with('success', 'La cuenta especial ha sido actualizado');
	}
}
