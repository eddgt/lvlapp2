<?php

namespace Cinema\Http\Controllers;


class PruebaController extends Controller
{

    /**
    *@return void
    */

	public function index()
	{
		#return view('welcome')
		return "Hola desde PruebaController";
	}

	public function getName($name)
	{
		return "Mi Nombre es ".$name." desde funcion getName()";
	}

}
