<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

/* --------------------CREANDO LAS RUTAS HACIA LOS CONTROLADORES                           */


/*-----------------------------Rutas para el controlador de actividad --------------------*/
Route::resource('actividad','ActividadController');

//Ruta para la funcion eliminar del controlador 
Route::get('actividad/destroy/{id}', ['as' => 'actividad/destroy', 'uses'=>'ActividadController@destroy']);
//Ruta paa realizar la busqueda de registros
Route::post('actividad/search', ['as' => 'actividad/search', 'uses' => 'ActividadController@search']);



/*-----------------------------Rutas para el controlador de acudiente --------------------*/
Route::resource('acudiente','AcudienteController');

//Ruta para la funcion eliminar del controlador 
Route::get('acudiente/destroy/{id}', ['as' => 'acudiente/destroy', 'uses'=>'AcudienteController@destroy']);
//Ruta paa realizar la busqueda de registros
Route::post('acudiente/search', ['as' => 'acudiente/search', 'uses' => 'AcudienteController@search']);



/*-----------------------------Rutas para el controlador de Aprendiz --------------------*/
Route::resource('aprendiz','AprendizController');

//Ruta para la funcion eliminar del controlador 
Route::get('aprendiz/destroy/{id}', ['as' => 'aprendiz/destroy', 'uses'=>'AprendizController@destroy']);
//Ruta paa realizar la busqueda de registros
Route::post('aprendiz/search', ['as' => 'aprendiz/search', 'uses' => 'AprendizController@search']);



/*-----------------------------Rutas para el controlador de Area --------------------*/
Route::resource('area','AreaController');

//Ruta para la funcion eliminar del controlador 
Route::get('area/destroy/{id}', ['as' => 'area/destroy', 'uses'=>'AreaController@destroy']);
//Ruta paa realizar la busqueda de registros
Route::post('area/search', ['as' => 'area/search', 'uses' => 'AreaController@search']);



/*-----------------------------Rutas para el controlador de Asesor --------------------*/
Route::resource('asesor','AsesorController');

//Ruta para la funcion eliminar del controlador 
Route::get('asesor/destroy/{id}', ['as' => 'asesor/destroy', 'uses'=>'AsesorController@destroy']);
//Ruta paa realizar la busqueda de registros
Route::post('asesor/search', ['as' => 'asesor/search', 'uses' => 'AsesorController@search']);



/*-----------------------------Rutas para el controlador de Cita --------------------*/
Route::resource('cita','CitaController');

//Ruta para la funcion eliminar del controlador 
Route::get('cita/destroy/{id}', ['as' => 'cita/destroy', 'uses'=>'CitaController@destroy']);
//Ruta paa realizar la busqueda de registros
Route::post('cita/search', ['as' => 'cita/search', 'uses' => 'CitaController@search']);




/*-----------------------------Rutas para el controlador de Encuesta --------------------*/
Route::resource('encuesta','EncuestaController');

//Ruta para la funcion eliminar del controlador 
Route::get('encuesta/destroy/{id}', ['as' => 'encuesta/destroy', 'uses'=>'EncuestaController@destroy']);
//Ruta paa realizar la busqueda de registros
Route::post('encuesta/search', ['as' => 'encuesta/search', 'uses' => 'EncuestaController@search']);





/*-----------------------------Rutas para el controlador de Evento --------------------*/
Route::resource('evento','EventoController');

//Ruta para la funcion eliminar del controlador 
Route::get('evento/destroy/{id}', ['as' => 'evento/destroy', 'uses'=>'EventoController@destroy']);
//Ruta paa realizar la busqueda de registros
Route::post('evento/search', ['as' => 'evento/search', 'uses' => 'EventoController@search']);





/*-----------------------------Rutas para el controlador de Evidencia --------------------*/
Route::resource('evidencia','EvidenciaController');

//Ruta para la funcion eliminar del controlador 
Route::get('evidencia/destroy/{id}', ['as' => 'evidencia/destroy', 'uses'=>'EvidenciaController@destroy']);
//Ruta paa realizar la busqueda de registros
Route::post('evidencia/search', ['as' => 'evidencia/search', 'uses' => 'EvidenciaController@search']);




/*-----------------------------Rutas para el controlador de Grupo --------------------*/
Route::resource('grupo','GrupoController');

//Ruta para la funcion eliminar del controlador 
Route::get('grupo/destroy/{id}', ['as' => 'grupo/destroy', 'uses'=>'GrupoController@destroy']);
//Ruta paa realizar la busqueda de registros
Route::post('grupo/search', ['as' => 'grupo/search', 'uses' => 'GrupoController@search']);



/*-----------------------------Rutas para el controlador de Lugar --------------------*/
Route::resource('lugar','LugarController');

//Ruta para la funcion eliminar del controlador 
Route::get('lugar/destroy/{id}', ['as' => 'lugar/destroy', 'uses'=>'LugarController@destroy']);
//Ruta paa realizar la busqueda de registros
Route::post('lugar/search', ['as' => 'lugar/search', 'uses' => 'LugarController@search']);



/*-----------------------------Rutas para el controlador de Novedad --------------------*/
Route::resource('novedad','NovedadController');

//Ruta para la funcion eliminar del controlador 
Route::get('novedad/destroy/{id}', ['as' => 'novedad/destroy', 'uses'=>'NovedadController@destroy']);
//Ruta paa realizar la busqueda de registros
Route::post('novedad/search', ['as' => 'novedad/search', 'uses' => 'NovedadController@search']);






/*-----------------------------Rutas para el controlador de Observaciones --------------------*/
Route::resource('obervaciones','ObservacionesController');

//Ruta para la funcion eliminar del controlador 
Route::get('obervaciones/destroy/{id}', ['as' => 'obervaciones/destroy', 'uses'=>'ObservacionesController@destroy']);
//Ruta paa realizar la busqueda de registros
Route::post('obervaciones/search', ['as' => 'obervaciones/search', 'uses' => 'ObservacionesController@search']);




/*-----------------------------Rutas para el controlador de Opcion --------------------*/
Route::resource('opcion','OpcionController');

//Ruta para la funcion eliminar del controlador 
Route::get('opcion/destroy/{id}', ['as' => 'opcion/destroy', 'uses'=>'OpcionController@destroy']);
//Ruta paa realizar la busqueda de registros
Route::post('opcion/search', ['as' => 'opcion/search', 'uses' => 'OpcionController@search']);





/*-----------------------------Rutas para el controlador de Pregunta --------------------*/
Route::resource('pregunta','PreguntaController');

//Ruta para la funcion eliminar del controlador 
Route::get('pregunta/destroy/{id}', ['as' => 'pregunta/destroy', 'uses'=>'PreguntaController@destroy']);
//Ruta paa realizar la busqueda de registros
Route::post('pregunta/search', ['as' => 'pregunta/search', 'uses' => 'PreguntaController@search']);




/*-----------------------------Rutas para el controlador de Remision --------------------*/
Route::resource('remision','RemisionesController');

//Ruta para la funcion eliminar del controlador 
Route::get('remision/destroy/{id}', ['as' => 'remision/destroy', 'uses'=>'RemisionesController@destroy']);
//Ruta paa realizar la busqueda de registros
Route::post('remision/search', ['as' => 'remision/search', 'uses' => 'RemisionesController@search']);



Route::resource('fichaCaracterizacion','FichaCaracterizacionController');

//Ruta para la funcion eliminar del controlador 
Route::get('fichaCaracterizacion/destroy/{id}', ['as' => 'fichaCaracterizacion/destroy', 'uses'=>'FichaCaracterizacionController@destroy']);
//Ruta paa realizar la busqueda de registros
Route::post('fichaCaracterizacion/search', ['as' => 'fichaCaracterizacion/search', 'uses' => 'FichaCaracterizacionController@search']);




Route::resource('ProgramaFormacion','ProgramaFormacionController');
//Ruta para la funcion eliminar del controlador 
Route::get('ProgramaFormacion/destroy/{id}', ['as' => 'ProgramaFormacion/destroy', 'uses'=>'ProgramaFormacionController@destroy']);
//Ruta paa realizar la busqueda de registros
Route::post('ProgramaFormacion/search', ['as' => 'ProgramaFormacion/search', 'uses' => 'ProgramaFormacionController@search']);

Route::resource('coordinacion','CoordinacionController');
//Ruta para la funcion eliminar del controlador 
Route::get('coordinacion/destroy/{id}', ['as' => 'coordinacion/destroy', 'uses'=>'CoordinacionController@destroy']);
//Ruta paa realizar la busqueda de registros
Route::post('coordinacion/search', ['as' => 'coordinacion/search', 'uses' => 'CoordinacionController@search']);


















