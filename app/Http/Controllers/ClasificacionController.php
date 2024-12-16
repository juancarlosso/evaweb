<?php

namespace App\Http\Controllers;

use App\Models\TipoServicio;
use App\Models\CoberturaPoliza;
use App\Models\EtapaCabina;
use App\Models\Delito;
use App\Models\ResponsabilidadInicial;
use App\Models\ResponsabilidadFinal;
use App\Models\EstadoConductor;
use App\Models\TipoDocumento;
use App\Models\TipoEstimacion;
use App\Models\TipoAsistencia;
use App\Models\TipoAutoridad;
use App\Models\ResultadoConclusion;
use App\Models\TipoExpediente;
use App\Models\FormaConclusion;
use App\Models\SituacionTercero;
use Illuminate\Http\Request;

class ClasificacionController extends Controller
{

	/*
    *
    * @brief
    * @author Jorge Ibarra
    * @param string
    * @return
    *
    */
	public function index($tipo)
	{
		$registros = NULL;
		switch ($tipo) {
			case 'tipos_servicios':
				$registros = TipoServicio::paginate(config('constantes.itemsPorPagina'));
				break;
			case 'coberturas_poliza':
				$registros = CoberturaPoliza::paginate(config('constantes.itemsPorPagina'));
				break;
			case 'etapas_cabina':
				$registros = EtapaCabina::paginate(config('constantes.itemsPorPagina'));
				break;
			case 'delitos':
				$registros = Delito::paginate(config('constantes.itemsPorPagina'));
				break;
			case 'responabilidades_iniciales':
				$registros = ResponsabilidadInicial::paginate(config('constantes.itemsPorPagina'));
				break;
			case 'responabilidades_finales':
				$registros = ResponsabilidadFinal::paginate(config('constantes.itemsPorPagina'));
				break;
			case 'estados_conductor':
				$registros = EstadoConductor::paginate(config('constantes.itemsPorPagina'));
				break;
			case 'tipos_documentos':
				$registros = TipoDocumento::paginate(config('constantes.itemsPorPagina'));
				break;
			case 'tipos_estimaciones':
				$registros = TipoEstimacion::paginate(config('constantes.itemsPorPagina'));
				break;
			case 'tipos_asistencias':
				$registros = TipoAsistencia::paginate(config('constantes.itemsPorPagina'));
				break;
			case 'tipos_autoridad':
				$registros = TipoAutoridad::paginate(config('constantes.itemsPorPagina'));
				break;
			case 'resultados_conclusiones':
				$registros = ResultadoConclusion::paginate(config('constantes.itemsPorPagina'));
				break;
			case 'tipos_expedientes':
				$registros = TipoExpediente::paginate(config('constantes.itemsPorPagina'));
				break;
			case 'formas_conclusion':
				$registros = FormaConclusion::paginate(config('constantes.itemsPorPagina'));
				break;
			case 'situaciones_terceros':
				$registros = SituacionTercero::paginate(config('constantes.itemsPorPagina'));
				break;
		}

		return view('clasificaciones.index', compact('tipo'))->with('registros', $registros);
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
		return view('clasificaciones.create');
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
		$tipo = $request->tipo;
		switch ($tipo) {
			case 'tipos_servicios':
				TipoServicio::create($request->all());
				break;
			case 'coberturas_poliza':
				CoberturaPoliza::create($request->all());
				break;
			case 'etapas_cabina':
				EtapaCabina::create($request->all());
				break;
			case 'delitos':
				Delito::create($request->all());
				break;
			case 'responabilidades_iniciales':
				ResponsabilidadInicial::create($request->all());
				break;
			case 'responabilidades_finales':
				ResponsabilidadFinal::create($request->all());
				break;
			case 'estados_conductor':
				EstadoConductor::create($request->all());
				break;
			case 'tipos_documentos':
				TipoDocumento::create($request->all());
				break;
			case 'tipos_estimaciones':
				TipoEstimacion::create($request->all());
				break;
			case 'tipos_asistencias':
				TipoAsistencia::create($request->all());
				break;
			case 'tipos_autoridad':
				TipoAutoridad::create($request->all());
				break;
			case 'resultados_conclusiones':
				ResultadoConclusion::create($request->all());
				break;
			case 'tipos_expedientes':
				TipoExpediente::create($request->all());
				break;
			case 'formas_conclusion':
				FormaConclusion::create($request->all());
				break;
			case 'situaciones_terceros':
				SituacionTercero::create($request->all());
				break;
		}
		return redirect()->route('clasificaciones.index', $tipo)->with('success', 'El registro ha sido creado');
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
		$tipo = $request->tipo;
		$registro = NULL;
		switch ($tipo) {
			case 'tipos_servicios':
				$registro = TipoServicio::findOrFail($id);
				break;
			case 'coberturas_poliza':
				$registro = CoberturaPoliza::findOrFail($id);
				break;
			case 'etapas_cabina':
				$registro = EtapaCabina::findOrFail($id);
				break;
			case 'delitos':
				$registro = Delito::findOrFail($id);
				break;
			case 'responabilidades_iniciales':
				$registro = ResponsabilidadInicial::findOrFail($id);
				break;
			case 'responabilidades_finales':
				$registro = ResponsabilidadFinal::findOrFail($id);
				break;
			case 'estados_conductor':
				$registro = EstadoConductor::findOrFail($id);
				break;
			case 'tipos_documentos':
				$registro = TipoDocumento::findOrFail($id);
				break;
			case 'tipos_estimaciones':
				$registro = TipoEstimacion::findOrFail($id);
				break;
			case 'tipos_asistencias':
				$registro = TipoAsistencia::findOrFail($id);
				break;
			case 'tipos_autoridad':
				$registro = TipoAutoridad::findOrFail($id);
				break;
			case 'resultados_conclusiones':
				$registro = ResultadoConclusion::findOrFail($id);
				break;
			case 'tipos_expedientes':
				$registro = TipoExpediente::findOrFail($id);
				break;
			case 'formas_conclusion':
				$registro = FormaConclusion::findOrFail($id);
				break;
			case 'situaciones_terceros':
				$registro = SituacionTercero::findOrFail($id);
				break;
		}
		$registro->delete();
		return redirect()->route('clasificaciones.index', $tipo)
			->with('success', 'El registro ha sido eliminado');
	}

	/*
    *
    * @brief
    * @author Jorge Ibarra
    * @param string
    * @return
    *
    */
	public function edit($id, $tipo)
	{
		switch ($tipo) {
			case 'tipos_servicios':
				$registro = TipoServicio::findOrFail($id);
				break;
			case 'coberturas_poliza':
				$registro = CoberturaPoliza::findOrFail($id);
				break;
			case 'etapas_cabina':
				$registro = EtapaCabina::findOrFail($id);
				break;
			case 'delitos':
				$registro = Delito::findOrFail($id);
				break;
			case 'responabilidades_iniciales':
				$registro = ResponsabilidadInicial::findOrFail($id);
				break;
			case 'responabilidades_finales':
				$registro = ResponsabilidadFinal::findOrFail($id);
				break;
			case 'estados_conductor':
				$registro = EstadoConductor::findOrFail($id);
				break;
			case 'tipos_documentos':
				$registro = TipoDocumento::findOrFail($id);
				break;
			case 'tipos_estimaciones':
				$registro = TipoEstimacion::findOrFail($id);
				break;
			case 'tipos_asistencias':
				$registro = TipoAsistencia::findOrFail($id);
				break;
			case 'tipos_autoridad':
				$registro = TipoAutoridad::findOrFail($id);
				break;
			case 'resultados_conclusiones':
				$registro = ResultadoConclusion::findOrFail($id);
				break;
			case 'tipos_expedientes':
				$registro = TipoExpediente::findOrFail($id);
				break;
			case 'formas_conclusion':
				$registro = FormaConclusion::findOrFail($id);
				break;
			case 'situaciones_terceros':
				$registro = SituacionTercero::findOrFail($id);
				break;
		}

		return response()->json($registro);
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

		$tipo = $request->tipo;
		$registro = NULL;
		switch ($tipo) {
			case 'tipos_servicios':
				$registro = TipoServicio::findOrFail($id);
				break;
			case 'coberturas_poliza':
				$registro = CoberturaPoliza::findOrFail($id);
				break;
			case 'etapas_cabina':
				$registro = EtapaCabina::findOrFail($id);
				break;
			case 'delitos':
				$registro = Delito::findOrFail($id);
				break;
			case 'responabilidades_iniciales':
				$registro = ResponsabilidadInicial::findOrFail($id);
				break;
			case 'responabilidades_finales':
				$registro = ResponsabilidadFinal::findOrFail($id);
				break;
			case 'estados_conductor':
				$registro = EstadoConductor::findOrFail($id);
				break;
			case 'tipos_documentos':
				$registro = TipoDocumento::findOrFail($id);
				break;
			case 'tipos_estimaciones':
				$registro = TipoEstimacion::findOrFail($id);
				break;
			case 'tipos_asistencias':
				$registro = TipoAsistencia::findOrFail($id);
				break;
			case 'tipos_autoridad':
				$registro = TipoAutoridad::findOrFail($id);
				break;
			case 'resultados_conclusiones':
				$registro = ResultadoConclusion::findOrFail($id);
				break;
			case 'tipos_expedientes':
				$registro = TipoExpediente::findOrFail($id);
				break;
			case 'formas_conclusion':
				$registro = FormaConclusion::findOrFail($id);
				break;
			case 'situaciones_terceros':
				$registro = SituacionTercero::findOrFail($id);
				break;
		}
		$registro->update($request->all());
		$registro->save();

		return redirect()->route('clasificaciones.index', $tipo)->with('success', 'El registro ha sido actualizado');
	}
}
