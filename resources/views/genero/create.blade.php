@extends('layouts.admin')

@section('content')

	{!!Form::open(['route'=>'genero.store', 'method'=>'POST'])!!}
<<<<<<< HEAD
		@include('genero.forms.gn')
=======
		@include('genre.forms.gn')
>>>>>>> 48912e5747439d714251d1d0b7b31e4ca1b698d0
		{!!Form::submit('Guardar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
@stop