@extends('layouts.master')

@section('content')

<h4>
	Reuniões Agendadas
	<small>
		<a href="{!! route('reuniaos.novo') !!}"><i class="fa fa-plus"></i> Agendar</a></small></a>
	</small>
</h4>

@include('partials.alerts')
@include('partials.search')

{{-- Start Table --}}
<table class="table table-hover" id="gridCategorias">
		<thead>
			<tr>
				<th>Nome</th>
				<th>Data</th>
				<th>Hora</th>
				<th>Descrição</th>
				<th colspan="2">Ações</th>
			</tr>
		</thead>

		<tbody>
			@foreach($reuniaos as $reuniao)
			<tr>
				<td><a href="#">{!! $reuniao['nome'] !!}</a></td>
				<td><a href="#">{!! $reuniao['data_reuniao'] !!}</a></td>
				<td><a href="#">{!! $reuniao['hora_reuniao'] !!}</a></td>
				<td><a href="#">{!! $reuniao['descricao'] !!}</a></td>
				<td>
					<a href="#" class="text-success">
						<i class="fa fa-fw fa-edit"></i> Editar
					</a>
				</td>
				<td>
					<a href="" class="confirmar-exclusao text-danger">
						<i class="fa fa-fw fa-trash"></i> Excluir
					</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
{{-- End Table --}}

{{-- Start Pagination --}}
	<div class="row" style="font-size: 10px;">
		<div class="col-md-12 text-center">
			{!! $reuniaos->render() !!}	
		</div>
	</div>
	{{-- End Pagination --}}
@endsection