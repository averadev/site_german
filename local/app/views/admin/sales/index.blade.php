@extends('admin/main_dashboard')
@section('content')
<!-- sales index -->
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
							<h3 style="display: inline-block; " class="header">Obras en venta</h3>
							<a data-tooltip="Añadir Obra" data-position="top" href="{{url('/admin/sales/create')}}" style="float: right; margin-top: 2.5%; margin-right: 3%;" class="btn-floating btn-large tooltipped waves-effect waves-light blue-grey darken-2 circle-button "><i style="font-size: 2.3rem;" class="material-icons">add</i></a>
							<div class="row">
							  <div class="col s12">
								<table class="highlight centered">
									<thead>
										<tr>
											<th data-field="id">#</th>
											<th data-field="name">NOMBRE</th>
											<th data-field="precio">PRECIO</th>
											<th data-field="opciones">STATUS</th>
											<th data-field="opciones">VER</th>
											<th data-field="opciones">360°</th>
											<th data-field="opciones">EDITAR</th>
										</tr>
									</thead>
									<tbody>
									@foreach( $sales as $key => $sale )
										<tr>
											<td> {{ (Input::get('page', 1) - 1) * $sales->getPerPage() + $key + 1 }}</td>
											<td>{{ isset($sale->languages->first()->name) ? $sale->languages->first()->name : ''  }}</td>
											<td>{{ $sale->price }}</td>
											<td>
												<div style="position: relative;">
													<div class="fixed-action-btn horizontal click-to-toggle" style="position: absolute; display: inline-block; padding-right: 3vw;">
														<a class="btn-floating btn-large medium-button  {{ $sale->status == 100 ? 'grey darken-1' : '' }}  {{ $sale->status == 101 ? 'green' : '' }} circle-button update-auction-status ">
															<i class="large material-icons"></i>
														</a>
														<ul>
															<li><a href="{{ url('/admin/sales/stop/'.$sale->id.'') }}" style="margin-right: -10px; margin-top: -18px;" data-tooltip="Detener" data-position="top" class="btn-floating statusAction tooltipped grey darken-1"><i class="material-icons">stop</i></a></li>
															<li><a href="{{ url('/admin/sales/active/'.$sale->id.'') }}" style="margin-right: 1.5vw; margin-top: -18px;" data-tooltip="Activar" data-position="top" class="btn-floating  statusAction tooltipped green" ><i class="material-icons">check</i></a></li>
														</ul>
													</div>
												</div>
											</td>
											<td><a href="{{ url('/admin/sales/show/'.$sale->id.'') }}"><i class="material-icons view">visibility</i></a></td>
											<td><a href="{{ url('/admin/sales/panorama/'.$sale->id.'') }}"><i class="material-icons edit">3d_rotation</i></a></td>
											<td><a href="{{ url('/admin/sales/edit/'.$sale->id.'') }}"><i class="material-icons edit">border_color</i></a></td>
										</tr>
									@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<?php echo $sales->links(); ?>
			</div>
		</div>
	</div>
@stop
@section('addJs')
	{{HTML::script('js/admin/auctionTable.js')}}
@stop