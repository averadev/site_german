@extends('admin/main_dashboard')
@section('content')
<style type="text/css">
	.select-wrapper input.select-dropdown {
	    margin: 0 0 10px;
	}
</style>
<link rel="stylesheet" type="text/css" href="{{ URL::asset('vendor/plugins/datetimepicker/datePicker.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('vendor/plugins/datetimepicker/boilerplate.css') }}">	
	<div class="container" style="min-height: 50em;" >
		<div class="row">
			<div class="col s12">
				<a href="{{ url('/admin/cv')}}" class="waves-effect waves-light button-back light-blue accent-3 btn"><i class="material-icons left">arrow_back</i>Regresar</a>
				<h5 class="title-auction">Añadir Trabajos al Currículum Vitae</h5>
			</div>
			<div class="col l6 s12" style="margin-bottom: 15px;" >
				<div class="row">
					<form id="saveCouponForm" class="col s12" action="{{ URL::to('admin/cv/create/save') }}" method="post">
					<input type="hidden" name="_token" id="csrf-token" value="{{ csrf_token() }}" />
						<div class="row m-btm-10px">
							<div class="input-field col l12" style="margin-top: 3rem;" >
								<select id="year_event" name="year_event">
								@for ($i = 1940; $i < 2018; $i++)
									<option value="{{$i}}">{{$i}}</option>
								@endfor
								</select>
								<label style="left:0.7rem">Año</label>
							</div>
							<div class="input-field col l12 m-btm-10px">
								<input value="" id="name" name="name" type="text" class="validate">
								<label for="name">Nombre</label>
							</div>
							<div class="input-field col l12 m-btm-10px">
								<textarea id="description" name="description" class="materialize-textarea validate"></textarea>
								<label for="description">Descripción</label>
							</div>
						</div>
						<input type="submit" value="Enviar">
					</form>
					<div class="row">
						<a id="saveCoupon" style="border-radius: 0px; margin-top: 3%; margin-right:10px; font-size: 1.3rem; z-index: 1;" class="waves-effect grey darken-4 waves-light btn-large right">GUARDAR CAMBIOS</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop
@section('addJs')
	{{HTML::script('vendor/plugins/datetimepicker/calendar.js')}}
	{{HTML::script('vendor/plugins/datetimepicker/jqDatePicker.min.js')}}
	{{-- {{HTML::script('js/admin/addcupon.js')}} --}}
@stop
