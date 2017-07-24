@extends('admin/main_dashboard')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('vendor/plugins/datetimepicker/datePicker.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('vendor/plugins/datetimepicker/boilerplate.css') }}">
<style type="text/css">
	table {
		width: 100%;
    }
    .input-field label {
    	left:0rem;
    }

    .btn-left{
    	margin-left: 1rem !important;
    }
    #mailModal{
    	z-index: 500 !important;
    }
</style>
	<div class="container" >
		<div class="row">
			<div class="col s12">
				<div class="container">
					<div id="highlight" class="scrollspy">
							<h3 style="display: inline-block; " class="header">Correos</h3>
							<div class="row">
								<div class="input-field col s6">
									<select id="selectemails">
										<option @if($status ==1 ) selected="" @endif  value="1">TODOS</option>
										<option @if($status ==2 ) selected="" @endif  value="2">CONTACTADOS</option>
										<option @if($status ==3 ) selected="" @endif  value="3">SIN CONTACTAR</option>
									</select>
    								<label style="left: 0.8rem;" >Mostrar</label>
  								</div>
 							</div>
							</div>
						<div class="row">
							 <div class="col s12">
								<table id="inboxtable" class="highlight centered">
									<thead>
										<tr>
											<th data-field="tipo">Tipo</th>
											<th data-field="nombre">Nombre</th>
											<th data-field="final">Email</th>
											<th data-field="company">Empresa</th>
											<th data-field="ciudad">Ciudad</th>
											<th data-field="cita">Cita</th>
											<th data-field="asunto">Asunto</th>
											<th data-field="comentario">Comentario</th>
											<th data-field="status">Contactado</th>
											<th data-field="creado">Creado</th>
										</tr>
									</thead>
									<tbody>
										@foreach( $emails as $key => $email )
										<tr data-email="{{$email->id}}" >
											<td>{{$email->emails->type_e}}</td>
											<td>{{$email->name}}</td>
											<td>{{$email->email}}</td>
											<td>{{$email->company}}</td>
											<td>{{$email->city}}</td>
											<td>{{$email->appointment}}</td>
											<td> <?php if($email->subject == 1) echo "proyecto"; else if($email->subject == 2) echo "Diseño"; else if($email->subject == 3) echo "Consulta"; else if($email->subject == 2) echo "Entrevista"; else echo ""; ?> </td>
											<td>{{$email->comment}}</td>
											<td >
												@if($email->status)
													{{$email->contactdate}} {{$email->contactby}}
												@else
													<a class="contact-check"><i class="material-icons clickable">check_box_outline_blank</i></a>
												@endif
											</td>
											<td>{{$email->created}}</td>
										</tr>	
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<?php echo $emails->links(); ?>
			</div>
		</div>
		<div id="mailModal" class="modal border-radius-10" style="padding: 1rem;" >
			<div class="notification">
			<div class="col s10">
				<div class="input-field col l12 m-btm-10px">
					<input value="" id="contactname" type="text">
					<label for="contactname">Contactado por</label>
				</div>
				<div class="input-field col l12 m-btm-10px">
					<input data-date="date-1"  value="" class="date" id="contactdate" type="text">
					<label for="contactdate">Fecha de contacto</label>
				</div>
				<input type="hidden" name="idemail" id="idemail" value="">
			</div>

			</div>
			<div class="modal-footer">
				<button id="savecontact" class="waves-effect waves-light btn btn-left">Aceptar</button>
				<button class="waves-effect waves-light btn btn-left modal-close">Cancelar</button>
			</div>
		</div>		
	</div>
@stop
@section('addJs')
	{{HTML::script('vendor/plugins/datetimepicker/calendar.js')}}
	{{HTML::script('vendor/plugins/datetimepicker/jqDatePicker.min.js')}}
	{{HTML::script('/js/admin/inbox.js')}}
@stop