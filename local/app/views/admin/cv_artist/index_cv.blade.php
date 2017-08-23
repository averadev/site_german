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
							<h3 style="display: inline-block; " class="header">CV German Arzate</h3>
							<a data-tooltip="Añadir Currículum" data-position="top" href="{{url('/admin/cv/create')}}" style="float: right; margin-top: 2.5%; margin-right: 3%;" class="btn-floating btn-large tooltipped waves-effect waves-light blue-grey darken-2 circle-button "><i style="font-size: 2.3rem;" class="material-icons">add</i></a>
							<div class="row">
							  <div class="col s12">
								<table class="highlight centered">
									<thead>
										<tr>
											<th data-field="id">#</th>
											<th data-field="name">AÑO</th>
											<th data-field="inicio">NOMBRE</th>
											<th data-field="descuento">DESCRIPCIÓN</th>
											<th data-field="vigencia">FECHA</th>
											<th data-field="opciones">STATUS</th>
											<th data-field="editar">EDITAR</th>
										</tr>
									</thead>
									<tbody>
									@foreach($cv_works as $key => $cv_items)
										<tr>
											<td></td>
											<td>{{$cv_items->year_event}}</td>
											<td>{{$cv_items->name}}</td>
											<td>{{$cv_items->description}}</td>
											<td>{{$cv_items->created_at}}</td>
											<td>
												<div style="position: relative; text-align: center;">
													<div class="fixed-action-btn horizontal click-to-toggle" style="position: absolute; display: inline-block; padding-right: 3vw;">
														<a class="btn-floating btn-large medium-button {{ $cv_items->status_item == 0 ? 'grey darken-1' : '' }} {{ $cv_items->status_item == 1 ? 'green' : '' }} circle-button ">
															<i class="large material-icons"></i>
														</a>
														<form id="saveCouponForm" class="col s12" action="{{ URL::to('admin/cv/delete/'.$cv_items->id_cv_artist_detail.'') }}" method="post">
														<input type="hidden" name="_token" id="csrf-token" value="{{ csrf_token() }}" />
														<input type="hidden" name="id_cv_artist_detail" id="{{$cv_items->id_cv_artist_detail}}" value="{{$cv_items->id_cv_artist_detail}}">
														<ul>
															<li><a href="{{ url('/admin/cv/delete/'.$cv_items->id_cv_artist_detail.'') }}" style="margin-right: 1.5vw; margin-top: -18px;" data-tooltip="Eliminar" data-position="top" class="btn-floating changecoupon tooltipped red darken-1" ><i class="material-icons">delete_forever</i></a></li>
														</ul>
														</form>
													</div>
												</div>
											</td>											
											<td><a href="{{ url('/admin/cv/edit/'.$cv_items->id_cv_artist_detail.'') }}"><i class="material-icons edit">border_color</i></a></td>
										</tr>
									@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop
@section('addJs')
<script type="text/javascript">
		$(".changecoupon").click(function(event) {
			$.blockUI({ message: $('#animationmatrix') });
		});
</script>
@stop