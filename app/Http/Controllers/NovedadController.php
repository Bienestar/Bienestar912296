<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
//extendemos hacia el modelo
use App\Models\Novedad as Novedad;

use App\Models\Asesor as Asesor;
use Illuminate\Http\Request;

class NovedadController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		$novedades = Novedad::name($request->get('name'))->orderBy('Tipo_Novedad','asc')->paginate(5);
		return \View::make('Novedades/list', compact('novedades'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$asesor = ['asesor' => Asesor::lists('Nombre_Asesor','id')];
	
		return \View::make('Novedades/new')->with('asesor', $asesor);
	
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		
		$novedad = new Novedad;
		$novedad->create($request->all());
		return redirect('novedad');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$novedades = Novedad::find($id);
		return \View::make('Novedades/update',compact('novedades'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request)
	{
		$novedades = Novedad::find($request->id);
		$novedades->Tipo_Novedad = $request->Tipo_Novedad;
		$novedades->Descripcion = $request->Descripcion;
		
		
		
		$novedades->save();
		return redirect('novedad');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$novedad = Novedad::find($id);
		$novedad->delete();
		return redirect()->back();
	}

}
