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
							<h3 style="display: inline-block; " class="header">Cupones</h3>
							<a data-tooltip="Añadir Cupón" data-position="top" href="{{url('/admin/cupones/create')}}" style="float: right; margin-top: 2.5%; margin-right: 3%;" class="btn-floating btn-large tooltipped waves-effect waves-light blue-grey darken-2 circle-button "><i style="font-size: 2.3rem;" class="material-icons">add</i></a>
							<div class="row">
							  <div class="col s12">
								<table class="highlight centered">
									<thead>
										<tr>
											<th data-field="id">#</th>
											<th data-field="name">NOMBRE</th>
											<th data-field="inicio">CODIGO</th>
											<th data-field="descuento">DESCUENTO</th>
											<th data-field="vigencia">VIGENCIA</th>
											<th data-field="opciones">STATUS</th>
											<th data-field="editar">EDITAR</th>
										</tr>
									</thead>
									<tbody>
									@foreach( $coupons as $key => $coupon )
										<tr>
											<td> {{ (Input::get('page', 1) - 1) * $coupons->getPerPage() + $key + 1 }}</td>
											<td>{{$coupon->name}}</td>
											<td>{{$coupon->code}}</td>
											<td>{{$coupon->discount*100}}%</td>
											<td> DEL {{$coupon->startDate}} <br> A {{$coupon->endDate }} </td>
											<td>
												<div style="position: relative;">
													<div class="fixed-action-btn horizontal click-to-toggle" style="position: absolute; display: inline-block; padding-right: 3vw;">
														<a class="btn-floating btn-large medium-button  {{ $coupon->status == 0 ? 'grey darken-1' : '' }}  {{ $coupon->status == 1 ? 'green' : '' }} circle-button ">
															<i class="large material-icons"></i>
														</a>
														<ul>
															<li><a href="{{ url('/admin/cupones/stop/'.$coupon->id.'') }}" style="margin-right: -10px; margin-top: -18px;" data-tooltip="Detener" data-position="top" class="btn-floating changecoupon tooltipped grey darken-1"><i class="material-icons">stop</i></a></li>
															<li><a href="{{ url('/admin/cupones/active/'.$coupon->id.'') }}" style="margin-right: 1.5vw; margin-top: -18px;" data-tooltip="Activar" data-position="top" class="btn-floating  changecoupon tooltipped green" ><i class="material-icons">check</i></a></li>
														</ul>
													</div>
												</div>
											</td>											
											<td><a href="{{ url('/admin/cupones/edit/'.$coupon->id.'') }}"><i class="material-icons edit">border_color</i></a></td>
										</tr>
									@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<?php echo $coupons->links(); ?>
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