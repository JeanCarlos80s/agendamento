@extends('layouts.master')

@section('content')

<h4>Novo Agendamento</h4>

@include('partials.alerts')

<div class="well well-sm">
	{!! Form::open(['route' => 'reuniaos.store']) !!}
		<div class="form-group">
			{!! Form::label('nome', 'Nome', ['class' => 'control-label']) !!}
			{!! Form::text('nome', null, ['class' => 'form-control input-sm', 'id' => 'nome']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('data_reuniao', 'Data da Reuniao', ['class' => 'control-label']) !!}
			{!! Form::date('data_reuniao', null, ['class' => 'form-control input-sm', 'id' => 'data_reuniao']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('hora_reuniao', 'Hora da Reuniao', ['class' => 'control-label']) !!}
			{!! Form::time('hora_reuniao', null, ['class' => 'form-control input-sm', 'id' => 'hora_reuniao']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('descricao', 'Assunto', ['class' => 'control-label']) !!}
			{!! Form::text('descricao', null, ['class' => 'form-control input-sm', 'id' => 'descricao']) !!}
		</div>

		<button class="btn btn-primary btn-sm" type="submit">Gravar</button>
	{!! Form::close() !!}
    
@endsection