@extends('admin/main_dashboard')
@section('content')
<style type="text/css">
	.btn-large{
		margin-bottom: 10px;
		margin-right: 10px;
		border-radius: 10px;
	}

</style>
	<div class="container" style="padding-top: 3em;" >
		<div class="row">
			<div class="col l8 s12">
				<div class="col s12">
					<div class="row">
						<div class="input-field">
							<select id="module">
								<option value="" disabled selected>Seleccione</option>
									@foreach ($components as $key => $value)
										<option value="{{$value->id}}">{{$value->name}}</option>
									@endforeach
							</select>
					 		<label>Sub - Sección</label>
						</div>
					</div>
					<div class="row" style="margin-top: -4%;" >
						<div class="titleForm" >Texto</div>
						
						<div class="container">
							<div class="row">
								<textarea id="txtEditor"></textarea> 
							</div>
						</div>
					</div>
					<div class="row">
						<a style="border-radius: 0px; margin-top: 3%; margin-right:4px; font-size: 1.3rem;" class="waves-effect grey darken-4 waves-light btn-large right">GUARDAR CAMBIOS</a>
					</div>
				</div>	
			</div>
			<div class="col l4 s12">
				<ul id="mainSections" class="collapsible" data-collapsible="accordion">

				</ul>
			</div>
		</div>
		<div class="row">

		</div>
	</div>
@stop
@section('addJs')
	{{HTML::script('/js/admin/dashboard.js')}}
	{{HTML::script('/vendor/plugins/line-editor/editor.js')}}
	{{HTML::script('/vendor/plugins/line-editor/dropdown.js')}}
@stop