@extends('layout.admin')
<?php
	$message=Session::get('message');
?>
@if (Session::has('message'))
	<div class="alert alert-success">
		<strong>Mensaje!</strong> {{ Session::get('message') }}.
	</div>
@endif
@section('content')
<div class="col-lg-12">
	<h1 class="page-header">Lista de Usuario</h1>
</div>
<table class="table">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Correo</th>
			<th>Operacion</th>
		</tr>
	</thead>
	@foreach ($users as $user)
	<tbody>
		<tr>
			<td>{{ $user->name }}</td>
			<td>{{ $user->email }}</td>
			<td>{!!link_to_route('usuario.edit', $title = 'Editar', $parameters = $user->id, $attributes = ['class'=>'btn btn-primary'])!!}</td>
		</tr>
	</tbody>
	@endforeach
</table>
<div align="right">
	{{ $users->render() }}
</div>
@stop