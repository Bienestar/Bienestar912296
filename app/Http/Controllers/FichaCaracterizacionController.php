<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\FichaCaracterizacion as FichaCaracterizacion;
use App\Models\ProgramaFormacion as ProgramaFormacion;
use Illuminate\Http\Request;

class FichaCaracterizacionController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$fCaracterizacion = FichaCaracterizacion::all();//->paginate(4);
		return \View::make('FichaCaracterizaciones/list', compact('fCaracterizacion'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		$programaFormacion = ['programaFormacion' =>ProgramaFormacion::lists('Nombre_Programa', 'id')];
		return \View::make('FichaCaracterizaciones/new', $programaFormacion);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
		$fichaCaracterizacion = new FichaCaracterizacion;
		$fichaCaracterizacion->create($request->all());
		return redirect('fichaCaracterizacion');
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
		//
		$programaFormacion = ['programaFormacion' =>ProgramaFormacion::lists('Nombre_Programa', 'id')];
		$fCaracterizacion= FichaCaracterizacion::find($id);
		return \View::make('FichaCaracterizaciones/update',compact('fCaracterizacion', 'programaFormacion'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request)
	{
		//
		$fCaracterizacion = FichaCaracterizacion::find($request->id);
        $fCaracterizacion->Numero_Ficha = $request->Numero_Ficha;
        $fCaracterizacion->save();
		return redirect('FichaCaracterizacion');
        

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//

		$FichaCaracterizacion= FichaCaracterizacion::find($id);
		$FichaCaracterizacion->delete();
		return redirect()->back();
	}

	public function search(Request $request)
	{

			$FCaracterizacion = FichaCaracterizacion::where('Numero_Ficha', 'like', '%' .$Request->Numero_Ficha. '%')->get();
		return  \View::make('FichaCaracterizaciones/list', compact('FichaCaracterizacion'));
	}

}
