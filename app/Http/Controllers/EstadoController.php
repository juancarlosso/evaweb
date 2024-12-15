<?php

namespace App\Http\Controllers;

use App\Models\Estado;
use Illuminate\Http\Request;

class EstadoController extends Controller
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
		$estados = Estado::paginate(config('constantes.itemsPorPagina'));
		return view('estados.index')->with('estados', $estados);
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
		return view('estados.create');
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
		$estado = Estado::create($request->all());
		return redirect()->route('estados.index')->with('success', 'El estado ha sido creado');
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
		$estado = Estado::findOrFail($id);
		$estado->delete();
		return redirect()->route('estados.index')
			->with('success', 'El estado ha sido eliminado');
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
		$estado = Estado::findOrFail($id);
		return response()->json($estado);
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
		$estado = Estado::findOrFail($id);
		$estado->update($request->all());
		$estado->save();
		

		return redirect()->route('estados.index')->with('success', 'El estado ha sido actualizado');
	}
}
