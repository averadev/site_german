@extends('admin/main_dashboard')
@section('content')
<link rel="stylesheet" href="{{ URL::asset('css/text-parser.css') }}">
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
					<form id="formComponent" >
						<div class="row">
							<div class="input-field">
								<select id="section">
									<option value="" disabled selected>Seleccione</option>
										@foreach ($sections as $key => $value)
											<option value="{{$value->id}}">{{$value->name}}</option>
										@endforeach
								</select>
								<label>Sección</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field">
								<select id="component">
									<option value="" disabled selected>Seleccione</option>	
								</select>
								<label>Componente</label>
							</div>
						</div>					
						<div id="txtElement" class="row" style="margin-top: -2%;" >
							<div class="titleForm" >Texto</div>
							
							<div class="container">
								<div class="row">
									<textarea id="txtEditor"></textarea> 
								</div>
							</div>
							<div class="row">
								<div class="col l6 s12">
									<label id="text_recommended" style="color: #757575;"></label>
								</div>
							</div>
						</div>
						<div id="imgElement" class="row hide">
							<div class="col l6 s12 grey lighten-3" style="padding-top:10px; padding-bottom: 10px;">
								<img id="idComponentPicture" style="max-height: 250px; max-width: 100%; " src="">
								<div class="row">
									<div class="col l6 s12">
										<label id="img_recommended" style="color: #757575;"></label>
									</div>
								</div>
							</div>
							<div class="col l6 s12">
								<div class="row">
									<div class="input-field col l12 m-btm-10px">
										<input name="tag_img" id="alt_tag" type="text" class="validate">
										<label id="labeltag" for="alt_tag">Alt</label>
									</div>
								</div>
								<div class="file-field input-field">
									<div class="btn">
										<span>Imagén</span>
										<input id="imgfile" name="imagen" type="file">
									</div>
										<div class="file-path-wrapper">
										<input id="imgname" class="file-path validate" type="text">
									</div>
								</div>
							</div>
							
						</div>
						<input id="element_id" name="element_id" type="hidden" value="">
						<input id="element_type" name="element_type" type="hidden" value="">
						<input id="moduleid" name="moduleid" type="hidden" value="{{$activeModule}}">
					</form>
					<div class="row">
						<a id="saveElement" style="border-radius: 0px; margin-top: 3%; margin-right:4px; font-size: 1.3rem;" class="waves-effect grey darken-4 waves-light btn-large right">GUARDAR CAMBIOS</a>
					</div>
				</div>	
			</div>
		</div>
		<div class="row">

		</div>
		<div class="" >
			<div id="font-text">
				
			</div>
		</div>
	</div>
@stop
@section('addJs')
<script>
$(document).ready(function(){
	$currentModule = <?php echo $activeModule ?>;
});
</script>
	{{HTML::script('/js/admin/dashboard.js')}}
	{{HTML::script('/vendor/plugins/line-editor/editor.min.js')}}
	{{HTML::script('/vendor/plugins/line-editor/dropdown.js')}}
@stop