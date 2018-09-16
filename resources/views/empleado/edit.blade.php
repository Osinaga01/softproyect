@extends('layouts.admin')

@section('content')
<div class="row">
		<div class="col-lg-12">
			<div class="card card-outline-info">
				<div class="card-header">
					<h4 class="m-b-0 text-white">Edicion de Tipo Contrato</h4>
				</div>
							<div class="card-body">
									<a href="{{ route('tipocontratos.index') }}" class="btn btn-outline-primary btn-rounded pull-right">
											Regresar
										</a>
									<h3 class="card-title">Datos</h3>
									<hr>
								@include('tipocontrato.partials.errors')
								{!! Form::model($tipocontrato, ['route' => ['tipocontratos.update', $tipocontrato->id], 'method' => 'PUT']) !!}
									
									@include('tipocontrato.partials.form')
									
								{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
	@endsection