<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
//extendemos hacia el modelo
use App\Models\Evidencia as Evidencia;
<<<<<<< HEAD
use App\Models\Aprendiz as Aprendiz;
=======

>>>>>>> 1b7ec500e165037160fb213dcb5f8bd45bfcf344
use Illuminate\Http\Request;

class EvidenciaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
<<<<<<< HEAD
	public function index(Request $request)
	{	
		$evidencias = Evidencia::nombre($request->get('nombre'))->orderBy('Nombre_Evidencia','asc')->paginate(4);
		return \View::make('Evidencias/list', compact('evidencias'));
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
<<<<<<< HEAD
	{	
		$aprendiz = ['aprendiz' => Aprendiz::lists('Nombre_Aprendiz','id')];
		return \View::make('Evidencias/new')->with('aprendiz');
=======
	{
		//
>>>>>>> 1b7ec500e165037160fb213dcb5f8bd45bfcf344
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
<<<<<<< HEAD
	public function store(Request $request)
	{
		$evidencia = new Evidencia;
		$evidencia->create($request->all());
		return redirect('evidencia');
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
		$evidencias = Evidencia::find($id);
		return \View::make('Evidencias/update',compact('evidencias'));
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
		$evidencias = Evidencia::find($request->id);
		$evidencias->Nombre_Evidencia = $request->Nombre_Evidencia;
		$evidencias->Archivo_Evidencia = $request->Archivo_Evidencia;
		$evidencias->Fk_IdAprendiz_Actividad = $request->Fk_IdAprendiz_Actividad;

		$evidencias->save();
		return redirect('lugar');
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
	
	}

	public function search(Request $request){

		$evidencias = Lugar::where('Nombre_Evidencia','like','%'.$request->Nombre.'%')->get();
		return \View::make('Evidencias/list', compact('evidencias'));

	}
=======
		//
	}

>>>>>>> 1b7ec500e165037160fb213dcb5f8bd45bfcf344
}
