@extends('layouts.admin')
@section('content')
	{!!Form::model($movie,['route'=> ['pelicula.update',$movie->id],'method'=>'PUT'])!!}
		@include('movie.forms.mv')
		{!!Form::submit('Guardar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
@stop