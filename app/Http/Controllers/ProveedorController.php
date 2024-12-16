<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use App\Http\Requests\ProveedorRequest;
use App\Models\Proveedor;
use App\Models\TipoAsistencia;

class ProveedorController extends Controller
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
		$proveedores = Proveedor::paginate(config('constantes.itemsPorPagina'));
		$tipos_asistencia=TipoAsistencia::all();
		return view('proveedores.index',compact('tipos_asistencia'))->with('proveedores', $proveedores);
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
		return view('proveedores.create');
	}

	/*
    *
    * @brief
    * @author Jorge Ibarra
    * @param string
    * @return
    *
    */
	public function store(ProveedorRequest $request)
	{
		
		$proveedor = Proveedor::create($request->all());
		if ($request->hasFile('logotipo')) {
			$extension = $request->logotipo->extension();
			$dir = "public/logotipos_proveedores/";
			$nombre_archivo = date('YmdHis') . "." . $extension;
			$request->logotipo->storeAs($dir, $nombre_archivo);
			$nombre_archivo = $dir . $nombre_archivo;
			$nombre_archivo = str_replace("public/", "storage/", $nombre_archivo);
			$proveedor->logotipo = $nombre_archivo;
			$proveedor->save();
		}

		if(isset($request->tipo_asistencia)){
			$tipo_asistencia=implode(",",$request->tipo_asistencia);
			$proveedor->tipos_asistencias=$tipo_asistencia;
			$proveedor->save();
		}
		
		return redirect()->route('proveedores.index')->with('success', 'El proveedor ha sido creado');
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
		$proveedor = Proveedor::findOrFail($id);
		$proveedor->delete();
		return redirect()->route('proveedores.index')
			->with('success', 'El proveedor ha sido eliminado');
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
		$proveedor = Proveedor::findOrFail($id);
		$proveedor->tipos_asistencias=explode(',',$proveedor->tipos_asistencias);
		return response()->json($proveedor);
	}

	/*
    *
    * @brief
    * @author Jorge Ibarra
    * @param string
    * @return
    *
    */
	public function update(ProveedorRequest $request, $id)
	{
		$proveedor = Proveedor::findOrFail($id);
		$proveedor->update($request->all());
		if ($request->hasFile('logotipo')) {
			$extension = $request->logotipo->extension();
			$dir = "public/logotipos_proveedores/";
			$nombre_archivo = date('YmdHis') . "." . $extension;
			$request->logotipo->storeAs($dir, $nombre_archivo);
			$nombre_archivo = $dir . $nombre_archivo;
			$nombre_archivo = str_replace("public/", "storage/", $nombre_archivo);
			$proveedor->logotipo = $nombre_archivo;
		}
		$proveedor->save();
		

		return redirect()->route('proveedores.index')->with('success', 'El proveedor ha sido actualizado');
	}
}
