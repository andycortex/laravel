@extends('layout.admin')
@section('content')
@if (count($errors)>0)
	<div class="alert alert-danger">
		<strong>Mensaje!</strong> 
		<ul>
			@foreach ($errors->all() as $error)
				<li>{!!$error!!}</li>
			@endforeach
		</ul>
	</div>
@endif
<div class="col-lg-12">
	<h1 class="page-header">Registrar Usuario</h1>
</div>
{!! Form::open(['route'=>'usuario.store','method'=>'POST']) !!}
@include('usuario.forms.usr');
{!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
{!! Form::close() !!}
@stop