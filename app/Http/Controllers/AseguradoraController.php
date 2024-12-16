<?php

namespace App\Http\Controllers;

use App\Models\Aseguradora;
use Illuminate\Http\Request;

class AseguradoraController extends Controller
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
		$aseguradoras = Aseguradora::paginate(config('constantes.itemsPorPagina'));
		return view('aseguradoras.index')->with('aseguradoras', $aseguradoras);
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
		return view('aseguradoras.create');
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
		$aseguradora = Aseguradora::create($request->all());
		return redirect()->route('aseguradoras.index')->with('success', 'La Aseguradora ha sido creado');
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
		$aseguradora = Aseguradora::findOrFail($id);
		$aseguradora->delete();
		return redirect()->route('aseguradoras.index')
			->with('success', 'La Aseguradora ha sido eliminado');
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
		$aseguradora = Aseguradora::findOrFail($id);
		return response()->json($aseguradora);
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
		$aseguradora = Aseguradora::findOrFail($id);
		$aseguradora->update($request->all());
		$aseguradora->save();
		

		return redirect()->route('aseguradoras.index')->with('success', 'La aseguradora ha sido actualizado');
	}
}
