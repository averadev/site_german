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
			<div class="input-field col l4 s12">
				<select id="module">
					<option value="" disabled selected>Seleccione</option>
  						@foreach ($modules as $key => $value)
  							<option value="{{$value->id}}">{{$value->name}}</option>
  						@endforeach
				</select>
			 	<label>Módulo</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col l4 s12">
				<select>
					<option value="" disabled selected>Seleccione</option>
					<option value="1">Option 1</option>
					<option value="2">Option 2</option>
					<option value="3">Option 3</option>
					</select>
			 	<label>Submodulo</label>			 	
			</div>
			
		</div>
	</div>
@stop
@section('addJs')
<script src="js/admin/dashboard.js"></script>
@stop