@extends('layouts.admin')

@if(Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}
</div>
@endif


@section('content')
@parent
	<table class="table">
		<thead>
			<th>Nombre</th>
			<th>Cast</th>
			<th>Direccion</th>
			<th>Duracion</th>
		</thead>
		@foreach($movies as $movie)
		<tbody>
			<td>{{$movie->name}}</td>
			<td>{{$movie->cast}}</td>
			<td>{{$movie->direction}}</td>
			<td>{{$movie->duration}}</td>
			<td>
			{!!link_to_route('pelicula.edit', $title = 'Editar', $parameters = $movie->id, $attributes = ['class'=>'btn btn-primary'])!!}
			</td>
		</tbody>
		@endforeach
	</table>
<<<<<<< HEAD
	{!!$movies->render()!!}
=======
>>>>>>> 48912e5747439d714251d1d0b7b31e4ca1b698d0
@stop