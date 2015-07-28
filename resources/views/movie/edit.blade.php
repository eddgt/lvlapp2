@extends('layouts.admin')
@section('content')
	{!!Form::model($movie,['route'=> ['pelicula.update',$movie->id],'method'=>'PUT'])!!}
		@include('movie.forms.mv')
<<<<<<< HEAD
		{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}

	{!!Form::open(['route'=> ['pelicula.destroy',$movie->id],'method'=>'DELETE'])!!}		
		{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
=======
		{!!Form::submit('Guardar',['class'=>'btn btn-primary'])!!}
>>>>>>> 48912e5747439d714251d1d0b7b31e4ca1b698d0
	{!!Form::close()!!}
@stop