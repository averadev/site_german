@extends('admin/main_dashboard')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12">
				<a href="{{ url('/admin/sales')}}" style="margin: 10px 0 10px;" class="waves-effect waves-light light-blue accent-3 btn"><i class="material-icons left">arrow_back</i>Regresar</a>
			</div>
			<div class="col l6 s12">
				<table class="striped">
					<tbody>
						<tr>
							<td style="width: 30%;" >
								<strong>Nombre</strong>
							</td>
							<td>
								{{ isset($auctionElement->languages->first()->name) ? $auctionElement->languages->first()->name : ''  }} 
							</td>
						</tr>
						<tr>
							<td style="width: 30%;">
								<strong>Descripción</strong>
							</td>
							<td>
								{{ isset($auctionElement->languages->first()->detail) ? $auctionElement->languages->first()->detail : ''  }} 
							</td>
						</tr>
						<tr>
							<td style="width: 30%;">
								<strong>Precio</strong>
							</td>
							<td>
								{{ $auctionElement->price }} 
							</td>
						</tr>						
					</tbody>
				</table>
			</div>
			<div class="col l6 m12 s12">
				<div id="divAuction" style="height: 285px; overflow: scroll;" >
					@foreach( $auctionElement->images as $key => $pic )
						<img class="show-image" src="{{ URL::asset('media/img/subasta_esculturas/'.$pic->filename.'') }}">
					@endforeach
				</div>
			</div>
		</div>
	</div>
@stop
@section('addJs')

@stop