<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cliente;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ClienteRequest;


class ClienteController extends Controller
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
		session(['modulo' => 'catalogos']);
		$clientes = Cliente::paginate(config('constantes.itemsPorPagina'));
		return view('clientes.index')->with('clientes', $clientes);
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
		return view('clientes.create');
	}

	/*
    *
    * @brief
    * @author Jorge Ibarra
    * @param string
    * @return
    *
    */
	public function store(ClienteRequest $request)
	{
		$cliente = Cliente::create($request->all());
		if ($request->hasFile('logotipo')) {
			$extension = $request->logotipo->extension();
			$dir = "public/logotipos/";
			$nombre_archivo = date('YmdHis') . "." . $extension;
			$request->logotipo->storeAs($dir, $nombre_archivo);
			$nombre_archivo = $dir . $nombre_archivo;
			$nombre_archivo = str_replace("public/", "storage/", $nombre_archivo);
			$cliente->logotipo = $nombre_archivo;
			$cliente->save();
		}

		return redirect()->route('clientes.index')->with('success', 'El cliente ha sido creado');
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
		$cliente = Cliente::findOrFail($id);
		$cliente->delete();
		return redirect()->route('clientes.index')
			->with('success', 'El cliente ha sido eliminado');
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
		$cliente = Cliente::findOrFail($id);
		return response()->json($cliente);
	}

	/*
    *
    * @brief
    * @author Jorge Ibarra
    * @param string
    * @return
    *
    */
	public function update(ClienteRequest $request, $id)
	{
		$cliente = Cliente::findOrFail($id);
		$cliente->update($request->all());
		if ($request->hasFile('logotipo')) {
			$extension = $request->logotipo->extension();
			$dir = "public/logotipo/";
			$nombre_archivo = date('YmdHis') . "." . $extension;
			$request->logotipo->storeAs($dir, $nombre_archivo);
			$nombre_archivo = $dir . $nombre_archivo;
			$nombre_archivo = str_replace("public/", "storage/", $nombre_archivo);
			$cliente->logotipo = $nombre_archivo;
		}
		$cliente->save();
		

		return redirect()->route('clientes.index')->with('success', 'El cliente ha sido actualizado');
	}
}
