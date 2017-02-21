@extends('templates.main')
@section('content')
	<div class="container">
		<div class="section">
			<div class="row"  style="margin-bottom: 0em;">
				<h5>Felicidades tu correo ha sido verificado satisfactoriamente</h5>
				<div class="col l3 s6">
					<a href="{{ url('/subasta#tab9') }}" class="waves-effect grey left lighten-5 grey-border btn"><i class="material-icons right">navigate_next</i>Regresar</a>
				</div>
			</div>
		</div>
	</div>
@stop
@section('addJs')
@stop