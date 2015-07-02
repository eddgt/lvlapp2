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
			<th>Genero</th>
			<th>id</th>
			
		</thead>
		@foreach($genres as $genero)
		<tbody>
			<td>{{$genero->genre}}</td>
			<td>{{$genero->id}}</td>
			
			<td>
			{!!link_to_route('genero.edit', $title = 'Editar', $parameters = $genero->id, $attributes = ['class'=>'btn btn-primary'])!!}
			</td>
		</tbody>
		@endforeach
	</table>
@stop