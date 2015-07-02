@extends('layouts.admin')
@section('content')
	{!!Form::model($movie,['route'=> ['pelicula.update',$movie->id],'method'=>'PUT'])!!}
		@include('movie.forms.mv')
		{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}

	{!!Form::open(['route'=> ['pelicula.destroy',$movie->id],'method'=>'DELETE'])!!}		
		{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
	{!!Form::close()!!}
@stop