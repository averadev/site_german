@extends('admin/main_dashboard')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('vendor/plugins/datetimepicker/datePicker.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('vendor/plugins/datetimepicker/boilerplate.css') }}">
	<div class="container">
		<div class="row">
			<div class="col s12">
				<a href="{{ url('/admin/sales')}}" class="waves-effect waves-light button-back light-blue accent-3 btn"><i class="material-icons left">arrow_back</i>Regresar</a>
				<h5 class="title-auction" >Editar Obra</h5>
			</div>
			<div class="col l6 s12" style="margin-bottom: 15px;" >
				<div class="row">
					<form class="col s12">
						<div class="row m-btm-10px">
							<div class="input-field col l12 m-btm-10px">
								<input value="{{ isset($auctionElement->languages->first()->name) ? $auctionElement->languages->first()->name : ''  }} " id="name" type="text" class="validate">
								<label for="name">Nombre</label>
							</div>
							<div class="input-field col l12 m-btm-10px">
								<input value="{{ isset($auctionElement->languages->first()->detail) ? $auctionElement->languages->first()->detail : ''  }} " id="description" type="text" class="validate">
								<label for="description">Descripción</label>
							</div>
							<div class="input-field col l12 m-btm-10px">
								<input value="{{ $auctionElement->price }}" id="price" type="text" class="validate">
								<label for="price">precio</label>
							</div>							
						</div>
						<input id="idAuction" type="hidden" value="{{$auctionElement->id}}">
					</form>
					<div class="row">
						<a id="saveAuction" style="border-radius: 0px; margin-top: 3%; margin-right:10px; font-size: 1.3rem;" class="waves-effect grey darken-4 waves-light btn-large right">GUARDAR CAMBIOS</a>
					</div>
				</div>
			</div>
			<div class="col l6 m12 s12">
				<div id="divAuction" style="height: 285px; overflow: scroll;" >
					@foreach( $auctionElement->images as $key => $pic )
						<div class="img-wrap">
							<a data-id="{{$pic->id}}" class="delete-image"><i class="material-icons font-size-18px">clear</i></a>
							<img class="auction-gallery" src="{{ URL::asset('media/img/subasta_esculturas/'.$pic->filename.'') }}">
						</div>
					@endforeach
				</div>

				<div class="col l8 s10">
					<form id="formImage" >
						<div class="file-field input-field">
							<div class="btn">
								<span>Imagén</span>
								<input id="imageAuction"  name="imagen" type="file">
								<input name="idAuction" type="hidden" value="{{$auctionElement->id}}">
							</div>
								<div class="file-path-wrapper">
								<input class="file-path validate" type="text">
							</div>
						</div>
					</form>					
				</div>
				<div class="col l2 s2" style="position: relative;" >
					<a id="saveImage" style=" position: absolute; left: 0; top: 17px;" class="waves-effect waves-light btn"><i style="margin: 0px;" class="material-icons left">done</i></a>
				</div>
			</div>			
		</div>
	</div>
	<div id="modalConfirm" class="modal modal-fixed-footer">
		<div class="modal-content">
			<h4>Eliminar imagen</h4>
			<p>¿Esta seguro de eliminar la imagen?</p>
		</div>
		<div class="modal-footer">
			<a class="modal-action modal-close waves-effect waves-red btn-flat ">Cancelar</a>
			<a id="removeImage" class="modal-action modal-close waves-effect waves-green btn-flat ">Aceptar</a>
		</div>
	</div>
@stop
@section('addJs')
	{{HTML::script('vendor/plugins/datetimepicker/calendar.js')}}
	{{HTML::script('vendor/plugins/datetimepicker/jqDatePicker.min.js')}}
	{{HTML::script('/js/admin/upsale.js')}}
@stop