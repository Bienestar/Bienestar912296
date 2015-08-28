<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
//extendemos hacia el modelo
use App\Models\Cita as Cita;
use App\Models\Aprendiz as Aprendiz;
use App\Models\Lugar as Lugar;
use App\Models\Asesor as Asesor;
use App\Http\Requests\CrearCitaRequest;
//utilizamos el request para validar los campos
use Illuminate\Http\Request;

class CitaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		
		$citas = Cita::fecha($request->get('fecha'))->orderBy('Fecha_Cita','asc')->paginate(5);
		return \View::make('Citas/list', compact('citas'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$aprendiz = ['aprendiz' => Aprendiz::lists('Nombre_Aprendiz','id')];
		$lugar = ['lugar' => Lugar::lists('Nombre_Lugar','id')];
		$asesor = ['asesor' => Asesor::lists('Nombre_Asesor','id')];
	
		return \View::make('Citas/new')->with('lugar', $lugar)->with('asesor', $asesor)->with('aprendiz', $aprendiz);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CrearCitaRequest $request)
	{
		$cita = new Cita;
		$cita->create($request->all());
		return redirect('cita');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
			$citas = Cita::find($id);
		return \View::make('Citas/update',compact('citas'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request)
	{
		$citas = Cita::find($request->id);
		$citas->Fecha_Cita = $request->Fecha_Cita;
		$citas->Hora_Cita = $request->Hora_Cita;
		$citas->Estado_Cita = $request->Estado_Cita;
		$citas->Fk_IdAprendiz = $request->Fk_IdAprendiz;
		$citas->Fk_IdLugar = $request->Fk_IdLugar;
		$citas->Fk_IdAsesor = $request->Fk_IdAsesor;

		$citas->save();
		return redirect('lugar');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$cita = Cita::find($id);
		$cita->delete();
		return redirect()->back();
	}



}
