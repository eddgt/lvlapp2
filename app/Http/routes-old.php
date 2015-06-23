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

Route::get('micontrolador','PruebaController@index');#osman hacemos referencia a un controller y @metodo que queremos que haga referencias
													 #osman accesar al controler en 	http://localhost:8000/micontrolador

Route::get('name/{name}','PruebaController@getName');#osman especificamos controlados y metodo a invocar

Route::resource('movie','MovieController');#para controllador tipo RESTful

Route::get('prueba',function(){
	return('hola desde routes.php');
});

Route::get('nombre/{nombre}',function($nombre){
	return 'Mi nombre es: '.$nombre;
}
	);

Route::get('edad/{edad}',function($edad){
	return 'Mi edad es: '.$edad;
}
	);

Route::get('/', function () {
    return view('welcome');
});
