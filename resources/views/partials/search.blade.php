{!! Form::open([ 'method' => 'get']) !!}
	<div class="input-group">
		<div class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></div>
		{!! Form::text('search', $search, ['class' => 'form-control input-sm', 'placeholder' => 'Busca']) !!}
	</div>
{!! Form::close() !!}