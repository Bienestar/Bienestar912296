<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Coordinacion as Coordinacion;
use Illuminate\Http\Request;

class CoordinacionController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$coordinaciones = Coordinacion::all();//->paginate(4);
		return \View::make('Coordinaciones/list', compact('coordinaciones'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return \View::make('Coordinaciones/new');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
		$coordinaciones = new Coordinacion;
		$coordinaciones->create($request->all());
		return redirect('coordinacion');
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
			$coordinaciones= Coordinacion::find($id);
		return \View::make('coordinaciones/update',compact('coordinaciones'));
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
		$coordinaciones = Coordinacion::find($request->id);
		$coordinaciones->Nombre_Coordinacion = $request->Nombre_Coordinacion;
		

		$coordinaciones->save();
		return redirect('coordinacion');
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
		$Coordinacion= Coordinacion::find($id);
		$Coordinacion->delete();
		return redirect()->back();
	}

	public function search(Request $Request)
	{

		$coordinacion = Coordinacion::where('Nombre_Coordinacion', 'like', '%' .$Request->Nombre_Coordinacion. '%')->get();
		return  \View::make('Coordinaciones/list', compact('coordinacion'));
	}

}
