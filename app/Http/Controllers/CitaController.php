<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
//extendemos hacia el modelo
use App\Models\Cita as Cita;
<<<<<<< HEAD
use App\Models\Aprendiz as Aprendiz;
use App\Models\Lugar as Lugar;
use App\Models\Asesor as Asesor;
use App\Http\Requests\CrearCitaRequest;
//utilizamos el request para validar los campos
=======

>>>>>>> 1b7ec500e165037160fb213dcb5f8bd45bfcf344
use Illuminate\Http\Request;

class CitaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
<<<<<<< HEAD
	public function index(Request $request)
	{
		
		$citas = Cita::fecha($request->get('fecha'))->orderBy('Fecha_Cita','asc')->paginate(5);
		return \View::make('Citas/list', compact('citas'));
=======
	public function index()
	{
		//
>>>>>>> 1b7ec500e165037160fb213dcb5f8bd45bfcf344
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
<<<<<<< HEAD
		$aprendiz = ['aprendiz' => Aprendiz::lists('Nombre_Aprendiz','id')];
		$lugar = ['lugar' => Lugar::lists('Nombre_Lugar','id')];
		$asesor = ['asesor' => Asesor::lists('Nombre_Asesor','id')];
	
		return \View::make('Citas/new')->with('lugar', $lugar)->with('asesor', $asesor)->with('aprendiz', $aprendiz);
=======
		//
>>>>>>> 1b7ec500e165037160fb213dcb5f8bd45bfcf344
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
<<<<<<< HEAD
	public function store(CrearCitaRequest $request)
	{
		$cita = new Cita;
		$cita->create($request->all());
		return redirect('cita');
=======
	public function store()
	{
		//
>>>>>>> 1b7ec500e165037160fb213dcb5f8bd45bfcf344
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
<<<<<<< HEAD
		$citas = Cita::find($id);
		$aprendiz = ['aprendiz' => Aprendiz::lists('Nombre_Aprendiz','id')];
		$lugar = ['lugar' => Lugar::lists('Nombre_Lugar','id')];
		$asesor = ['asesor' => Asesor::lists('Nombre_Asesor','id')];

		
		return \View::make('Citas/update',compact('citas','aprendiz','asesor','lugar'));
=======
		//
>>>>>>> 1b7ec500e165037160fb213dcb5f8bd45bfcf344
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
<<<<<<< HEAD
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
		return redirect('cita');
=======
	public function update($id)
	{
		//
>>>>>>> 1b7ec500e165037160fb213dcb5f8bd45bfcf344
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
<<<<<<< HEAD
		$cita = Cita::find($id);
		$cita->delete();
		return redirect()->back();
	}



=======
		//
	}

>>>>>>> 1b7ec500e165037160fb213dcb5f8bd45bfcf344
}
