@extends('layouts.admin')

@section('content')

	{!!Form::open(['route'=>'genero.store', 'method'=>'POST'])!!}
		@include('genero.forms.gn')
		{!!Form::submit('Guardar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
@stop