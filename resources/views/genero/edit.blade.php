@extends('layouts.admin')
@section('content')
	{!!Form::model($genre,['route'=> ['genero.update',$genre->id],'method'=>'PUT'])!!}
		@include('genero.forms.gn')
		{!!Form::submit('Guardar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
@stop