@extends('templates.main')
@section('content')
<style type="text/css">
	.margin-text{
		margin-top: 2em;
	}

	.margin-bottom{
		margin-bottom: 2.4em;
	}

	.font-title{
		font-size: 2.2rem;
	}
</style>
	<div class="container">
		<div class="section">
			<div class="row"  style="margin-bottom: 0em;">
				<h4 class="margin-text font-title col s12" >Felicidades. Tu correo ha sido confirmado satisfactoriamente.</h4>
				<!--<h5 class="margin-text col l11 m12 s12" >A partir de este momento, tu oferta se ha validado y aparecerá como oferta vigente, identificada por el nombre de usuario que seleccionaste.</h5>-->
				<div class="col l10 s12 margin-bottom margin-text center-align">
					<a href="{{ url('/subasta#tab5) }}" class="waves-effect grey center-align lighten-5 grey-border btn"><i class="material-icons right">navigate_next</i>Regresar</a>
				</div>
			</div>
		</div>
	</div>
@stop
@section('addJs')
@stop