<?php

namespace App\Http\Controllers;

use App\Models\Municipio;
use App\Models\Estado;
use Illuminate\Http\Request;

class MunicipioController extends Controller
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
		$municipios = Municipio::with('estado')->get(); // );paginate(config('constantes.itemsPorPagina'));
		$estados=Estado::all();
		return view('municipios.index',compact('estados'))->with('municipios', $municipios);
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
		return view('municipios.create');
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
		$municipio = Municipio::create($request->all());
		return redirect()->route('municipios.index')->with('success', 'El Municipio ha sido creado');
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
		$municipio = Municipio::findOrFail($id);
		$municipio->delete();
		return redirect()->route('municipios.index')
			->with('success', 'El Municipio ha sido eliminado');
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
		$municipio = Municipio::findOrFail($id);
		return response()->json($municipio);
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
		$municipio = Municipio::findOrFail($id);
		$municipio->update($request->all());
		$municipio->save();


		return redirect()->route('municipios.index')->with('success', 'El Municipio ha sido actualizado');
	}
}
