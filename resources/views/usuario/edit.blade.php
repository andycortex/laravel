@extends('layout.admin')
@section('content')
<div class="col-lg-12">
	<h1 class="page-header">Modificar Usuario</h1>
</div>
{!! Form::model($user,['route'=>['usuario.update',$user->id],'method'=>'PUT']) !!}
@include('usuario.forms.usr');
{!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}
{!! Form::close() !!}

{!! Form::open(['route'=>['usuario.destroy',$user->id],'method'=>'DELETE']) !!}
{!! Form::submit('Eliminar',['class'=>'btn btn-danger']) !!}
{!! Form::close() !!}
@stop