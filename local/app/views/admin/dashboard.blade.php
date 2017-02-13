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
			<div class="col l4 s12">				
				<div class="input-field">
					<select id="module">
						<option value="" disabled selected>Seleccione</option>
			  				@foreach ($modules as $key => $value)
			  					<option value="{{$value->id}}">{{$value->name}}</option>
			  				@endforeach
					</select>
				 	<label>Módulo</label>
				</div>
				<div class="input-field">
					<select id="submodule" >
						<option value="" disabled selected>Seleccione</option>
					</select>
				 	<label>Submodulo</label>			 	
				</div>		
			</div>
			<div class="col l8 s12">
				<ul id="mainSections" class="collapsible" data-collapsible="accordion">

				</ul>
			</div>
		</div>
			<div class="row">
				<div class="container">
					<div class="row">
						<div class="col l12">
							<textarea id="txtEditor"></textarea> 
						</div>
					</div>
				</div>
			</div>
	</div>
@stop
@section('addJs')
	<script src="js/admin/dashboard.js"></script>
	<script src="vendor/plugins/line-editor/editor.js"></script>
	<script src="vendor/plugins/line-editor/dropdown.js"></script>
@stop