@extends('admin/main_dashboard')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('/vendor/plugins/threesixty/threesixty.css') }}">
<style type="text/css">
/* ------------------------
*
* 		ul#Sortable Gallery
*
*  -------------------------- */
ul.sortable {width: 100%; float: left; margin-left:0.6rem; list-style: none; position: relative !important;}
ul.sortable li {
	height: 95px;
	float: left;
	margin: 0 7px 7px 0;
	border: 2px solid #fff;
	cursor: move;
	position: relative;
}
ul.sortable li img {height: 100%; float: left;}
ul.sortable li.ui-sortable-helper {border-color: #3498db;}

.input-field{
	margin-top: 0 !important;
}

ul.sortable li.placeholder {width: 163px; height: 95px; float: left; background: #eee; border: 2px dashed #bbb; display: block; opacity: 0.6;
	border-radius: 2px;
	-moz-border-radius: 2px;
	-webkit-border-radius: 2px;
}

#saveImage{
	position: absolute; left: 0; top: 3px;
}

ol, ul {
	list-style: none;
	margin: 0;
	padding: 0;
	border: 0;
}

</style>
	<div class="container">
		<div class="row">
			<div class="col s12">
				<a href="{{ url('/admin/sales')}}" class="waves-effect waves-light button-back light-blue accent-3 btn"><i class="material-icons left">arrow_back</i>Regresar</a>
				<h5 class="title-auction" >Editar Imagen 360°</h5>
			</div>
			<div class="col l6 s12" style="margin-bottom: 15px;" >
				<div class="col s12">
					<div class="row">
						<div class="col s10">
							<form id="formImage" >
								<div class="file-field input-field" >
									<div class="btn">
										<span>Imagén</span>
										<input id="imageAuction"  name="imagen" type="file">
										<input name="idAuction" id="idAuction" type="hidden" value="{{$subasta_id}}">
									</div>
										<div class="file-path-wrapper">
										<input class="file-path validate" type="text">
									</div>
								</div>
							</form>
						</div>
						<div class="col s2" style="position: relative;">
							<a id="saveImage" class="waves-effect waves-light btn"><i style="margin: 0px;" class="material-icons left">done</i></a>
						</div>
					</div>
					<div class="row">
						<ul  class="sortable" style="margin-top: 10px;" >
							@foreach( $images as $key => $image )
								<li id="item-{{$image->id}}">
									<a data-id="{{$image->id}}" class="delete-image"><i class="material-icons font-size-18px">clear</i></a>
									<img src="{{ URL::asset('media/img/subasta_esculturas/'.$image->filename.'') }}">
								</li>
							@endforeach
						</ul>
						<div class="col s12">
							<a  id="sortImages" class="waves-effect waves-light btn deep-orange accent-2 col s12">Guardar orden</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col l6 s12">
				<div class="row">
					<div style="position: relative;" >
						<div class="threesixty car">
							<div class="spinner">
								<span>0%</span>
							</div>
						<ol class="threesixty_images"></ol>
						</div>
					</div>
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
	<script type="text/javascript">
		var $panoramaJson = <?php echo json_encode($images); ?>;
	</script>
	{{HTML::script('/js/admin/savepanorama.js')}}
	{{HTML::script('/vendor/plugins/threesixty/threesixty.min.js')}}
	{{HTML::script('https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js')}}
@stop

