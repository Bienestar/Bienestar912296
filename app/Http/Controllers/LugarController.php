<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
//extendemos hacia el modelo
use App\Models\Lugar as Lugar;
use App\Http\Requests\CrearLugarRequest;
//utilizamos el request para validar los campos
use Illuminate\Http\Request;

class LugarController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
<<<<<<< HEAD
	public function index(Request $request)
	{
		
		$lugares = Lugar::name($request->get('name'))->orderBy('Nombre_Lugar','asc')->paginate(1);
=======
	public function index()
	{
		$lugares = Lugar::orderBy('Tipo_Lugar','asc')->paginate(4);
>>>>>>> 1b7ec500e165037160fb213dcb5f8bd45bfcf344
		return \View::make('lugares/list', compact('lugares'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return \View::make('lugares/new');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CrearLugarRequest $request)
	{
		$lugar = new Lugar;
		$lugar->create($request->all());
		return redirect('lugar');
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
		$lugares = Lugar::find($id);
		return \View::make('lugares/update',compact('lugares'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request)
	{
		$lugares = Lugar::find($request->id);
		$lugares->Nombre_Lugar = $request->Nombre_Lugar;
		$lugares->Tipo_Lugar = $request->Tipo_Lugar;
		$lugares->Descripcion = $request->Descripcion;

		$lugares->save();
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
		$lugar = Lugar::find($id);
		$lugar->delete();
		return redirect()->back();
	}

<<<<<<< HEAD
=======
	public function search(Request $request){

		$lugares = Lugar::where('Nombre_Lugar','like','%'.$request->Nombre.'%')->get();
		return \View::make('Lugares/list', compact('lugares'));

	}
>>>>>>> 1b7ec500e165037160fb213dcb5f8bd45bfcf344
}