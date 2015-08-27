<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
//extendemos hacia el modelo
use App\Models\Encuesta as Encuesta;
use Illuminate\Http\Request;

class EncuestaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$encuestas = Encuesta::orderBy('Tipo_Lugar','asc')->paginate(4);
		return \View::make('lugar/list', compact('encuestas'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return \View::make('Encuesta/new');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$encuesta = new Encuesta;
		$encuesta->create($request->all());
		return redirect('encuesta');
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
		

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request)
	{
		
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$encuesta = Encuesta::find($id);
		$encuesta->delete();
		return redirect()->back();
	}

	public function search(Request $request){
	$encuestas = Encuesta::where('Fecha_Encuesta','like','%'.$request->Fecha.'%')->get();
	return \View::make('encuesta/list', compact('encuestas'));

	}

}
