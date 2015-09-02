<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
//extendemos hacia el modelo
use App\Models\Aprendiz as Aprendiz;
<<<<<<< HEAD
=======
use App\Models\FichaCaracterizacion as FichaCaracterizacion;
//llamamos el request para la validacion de campo
use App\Http\Requests\CrearAprendizRequest;
>>>>>>> 1b7ec500e165037160fb213dcb5f8bd45bfcf344

use Illuminate\Http\Request;

class AprendizController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
<<<<<<< HEAD
		$Aprendizs = Aprendiz::orderBy('Nombre_Aprendiz','asc');//->paginate(4);
		return \View::make('Aprendiz/list', compact('Aprendizs'));
=======
		$aprendices = Aprendiz::orderBy('Nombre_Aprendiz','asc');//->paginate(4);
		return \View::make('aprendices/list', compact('aprendices'));
>>>>>>> 1b7ec500e165037160fb213dcb5f8bd45bfcf344
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
<<<<<<< HEAD
=======
		$FichaCaracterizacion = ['FichaCaracterizacion' =>FichaCaracterizacion::lists('Numero_Ficha', 'id')];
		return \View::make('aprendices/new', $FichaCaracterizacion);
>>>>>>> 1b7ec500e165037160fb213dcb5f8bd45bfcf344
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
<<<<<<< HEAD
	public function store()
	{
		//
	}
=======
	public function store(CrearAprendizRequest $request)
	{
		//
		$aprendiz = new Aprendiz;
		$aprendiz->create($request->all());
		return redirect('Aprendiz');
	}
	
>>>>>>> 1b7ec500e165037160fb213dcb5f8bd45bfcf344

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
<<<<<<< HEAD
=======
		$aprendiz= aprendiz::find($id);
		return \View::make('aprendices/update',compact('aprendiz'));
>>>>>>> 1b7ec500e165037160fb213dcb5f8bd45bfcf344
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
<<<<<<< HEAD
=======
		$aprendiz = aprendiz::find($request->id);
		$aprendiz->NumeroIdentificacion_Aprendiz = $request->NumeroIdentificacion_Aprendiz;
		$aprendiz->TipoDoc_Aprendiz =$request->TipoDoc_Aprendiz;
		$aprendiz->Nombre_Aprendiz= $request->Nombre_Aprendiz;
		$aprendiz->Apellido_Aprendiz= $request->Apellido_Aprendiz;
		$aprendiz->Direccion_Aprendiz= $request->Direccion_Aprendiz;
		$aprendiz->Telefono_Aprendiz=$request->Telefono_Aprendiz;
        $aprendiz->Genero_Aprendiz=$request->Genero_Aprendiz;
        $aprendiz->Contraseña_Aprendiz=$request->Contraseña_Aprendiz;
        $aprendiz->Eps=$request->Eps;
		$aprendiz->save();
		return redirect('aprendiz');
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
		//
<<<<<<< HEAD
=======
		$aprendiz= aprendiz::find($id);
		$aprendiz->delete();
		return redirect()->back();
	}

	public function search(Request $Request)
	{

		$aprendiz = aprendiz::where('NumeroIdentificacion_Aprendiz', 'like', '%' .$Request->NumeroIdentificacion_Aprendiz. '%')->get();
		return  \View::make('aprendices/list', compact('aprendiz'));
>>>>>>> 1b7ec500e165037160fb213dcb5f8bd45bfcf344
	}

}
