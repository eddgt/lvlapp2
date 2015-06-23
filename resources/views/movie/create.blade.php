@extends('layouts.admin')

@section('content')


	{!!Form::open(['route'=>'pelicula.store', 'method'=>'POST'])!!}
		@include('movie.forms.mv')
		{!!Form::submit('Guardar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
@stop