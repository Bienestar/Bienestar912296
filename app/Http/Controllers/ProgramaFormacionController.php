<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\ProgramaFormacion as ProgramaFormacion;
use App\Models\Coordinacion as Coordinacion;
use Illuminate\Http\Request;

class ProgramaFormacionController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$ProgramaFormaciones = ProgramaFormacion::all();//->paginate(4);
		return \View::make('ProgramaFormacion/list', compact('ProgramaFormaciones'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		$Coordinacion = ['coordinacion' => coordinacion::lists('Nombre_Coordinacion', 'id')];
		return \View::make('ProgramaFormacion/new', $Coordinacion);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
		$ProgramaFormacion = new ProgramaFormacion;
		$ProgramaFormacion->create($request->all());
		return redirect('ProgramaFormacion');
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
		$Coordinacion = ['Coordinacion' =>Coordinacion::lists('Nombre_Coordinacion', 'id')];
		$ProgramaFormaciones= ProgramaFormacion::find($id);
		return \View::make('ProgramaFormacion/update',compact('ProgramaFormaciones','Coordinacion'));
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

	

		$ProgramaFormaciones = ProgramaFormacion::find($request->id);
        $ProgramaFormaciones->Nombre_Programa = $request->Nombre_Programa;
        $ProgramaFormaciones->FK_IdCoordinacion = $request->FK_IdCoordinacion;
        $ProgramaFormaciones->save();
		return redirect('ProgramaFormacion');
        
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
		$ProgramaFormacion= ProgramaFormacion::find($id);
		$ProgramaFormacion->delete();
		return redirect()->back();
	}

	public function search(Request $request)
	{

			$ProgramaFormaciones = ProgramaFormacion::where('Nombre_Programa', 'like', '%' .$Request->Nombre_Programa. '%')->get();
		return  \View::make('ProgramaFormacion/list', compact('ProgramaFormacion'));
	}

}
