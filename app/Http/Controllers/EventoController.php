<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
//extendemos hacia el modelo
use App\Models\Evento as Evento;

use Illuminate\Http\Request;

class EventoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
<<<<<<< HEAD
	public function index(Request $request)
	{
		$eventos = Evento::name($request->get('name'))->orderBy('FechaIncio_Evento','asc')->paginate(5);
		return \View::make('Eventos/list', compact('eventos'));
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
			return \View::make('Eventos/new');
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
	public function store(Request $request)
	{
		$evento = new Evento;
		$evento->create($request->all());
		return redirect('evento');
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
<<<<<<< HEAD
		
=======
		//
>>>>>>> 1b7ec500e165037160fb213dcb5f8bd45bfcf344
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
		$eventos = Evento::find($id);
		return \View::make('Eventos/update',compact('eventos'));
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
		$eventos = Evento::find($request->id);
		$eventos->Nombre_Evento = $request->Nombre_Evento;
		$eventos->FechaIncio_Evento = $request->FechaIncio_Evento;
		$eventos->FechaFinalizacion_Evento = $request->FechaFinalizacion_Evento;
		$eventos->Direccion_Evento = $request->Direccion_Evento;
		$eventos->Restricciones = $request->Restricciones;
		$eventos->Cupos_Envento = $request->Cupos_Envento;
		$eventos->Descripcion_Envento = $request->Descripcion_Envento;
		$eventos->Estado_Evento = $request->Estado_Evento;


		$eventos->save();
		return redirect('evento');
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
		$evento = Evento::find($id);
		$evento->delete();
		return redirect()->back();
	}




=======
		//
	}

>>>>>>> 1b7ec500e165037160fb213dcb5f8bd45bfcf344
}
