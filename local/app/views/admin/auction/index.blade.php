@extends('admin/main_dashboard')
@section('content')
<style type="text/css">
	.btn-large{
		margin-bottom: 10px;
		margin-right: 10px;
		border-radius: 10px;
	}

	.material-icons{
		display: -webkit-box;
		display: -moz-box;
		display: -ms-flexbox;
		display: -webkit-flex;
		display: flex;
		align-items: center;
		justify-content: center;
		line-height: 50%;		
		cursor: pointer;	
	}
	.material-icons.enable{
		font-size: 35px;		
		color: #0C8D00;
	}
	.material-icons.disable{
		font-size: 35px;		
		color: #D2322D;
	}
	.material-icons.view{
		font-size: 30px;		
		color: #394048;
	}

	.material-icons.edit{
		font-size: 30px;		
		color: #394048;
	}	

</style>
	<div class="container">
		<div class="row">
			<div class="col s12">
				<div class="container">
					<div id="highlight" class="scrollspy">
						@if (Session::has('message'))
							<div id="card-alert" class="card orange lighten-5">
								<div class="card-content orange-text">
									<p>{{ Session::get('message') }}</p>
								</div>
								
							</div>
						@endif
							<h3 style="display: inline-block; " class="header">Subastas</h3>
							<a data-tooltip="Añadir Subata" data-position="top" href="{{url('/admin/subasta/create')}}" style="float: right; margin-top: 2.5%; margin-right: 3%;" class="btn-floating btn-large tooltipped waves-effect waves-light blue-grey darken-2 circle-button"><i style="font-size: 2.3rem;" class="material-icons">add</i></a>
							<a data-tooltip="Detener Subatas" data-position="left" href="{{url('/admin/subasta/stop')}}" style="float: right; margin-top: 2.5%; margin-right: 3%;" class="btn-floating btn-large tooltipped waves-effect waves-light deep-orange circle-button"><i style="font-size: 2.3rem;" class="material-icons">stop</i></a>
							<div class="row">
							  <div class="col s12">
								<table class="highlight centered">
									<thead>
										<tr>
											<th data-field="id">#</th>
											<th data-field="name">NOMBRE</th>
											<th data-field="inicio">FECHA INICIO</th>
											<th data-field="final">FECHA FINAL</th>
											<th data-field="opciones">ACTIVAR</th>
											<th data-field="opciones">VER</th>
											<th data-field="opciones">EDITAR</th>
										</tr>
									</thead>
									<tbody>
									@foreach( $auctions as $key => $auction )
										<tr>
											<td>{{$key+1}}</td>
											<td>{{$auction->name}}</td>
											<td>{{$auction->iniDate}}</td>
											<td>{{$auction->endDate}}</td>
											<td><a href="{{ url('/admin/subasta/active/'.$auction->id.'') }}"><i class="material-icons {{ $auction->status == 0 ? 'disable' : 'enable' }}">fiber_manual_record</i></a></td>
											<td><a href="{{ url('/admin/subasta/show/'.$auction->id.'') }}"><i class="material-icons view">visibility</i></a></td>
											<td><a href="{{ url('/admin/subasta/edit/'.$auction->id.'') }}"><i class="material-icons edit">border_color</i></a></td>
										</tr>
									@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<?php echo $auctions->links(); ?>
			</div>
		</div>
	</div>
@stop
@section('addJs')

@stop