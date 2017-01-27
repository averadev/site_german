@extends('templates.main')
@section('content')

    <!-- Slider -->
    <div id="index-banner" class="parallax-container fontCrimson">
		<div class="section no-pad-bot">
			<div class="container">
				<br><br>
			<!--	<h1 class="header center teal-text text-lighten-2">Parallax Template</h1> -->
				<div class="row center">
					<p style="margin-top: 10%;" class="header col s12 light ContactT"><span style="font-size: 4.5rem;">C</span>ONTACTO</p>
                    <p class="ContactSubT">¿Quieres saber más de mi trabajo? Escríbeme.</p>
				</div>
				<div class="row center">
					
				</div>
				<br><br>
			</div>
		</div>
		<div class="parallax"><img src="media/img/contacto/contacto_slider.png"></div>
	</div>
	<!-- Slider -->

	<!-- Formulario -->
	<div class="bg_contact" >
		<div class="section" >
			<div class="container row fontCrimson">
				<div class="col s12 m6 l6">
                    <div class="row"><img class="algRC" src="media/img/contacto/bull.png"></div>
                    <div class="row">
                        <p class="algRC">Calle Niebla No.5 S.M.18<br/>
                           77580 Cancún, Q. Roo, México<br/>
                           Tel: 011 521 998 1068505<br/>
                           E-mail: <a href="mailto:art@germanarzate.com">art@germanarzate.com</a></p>
                    </div>
                    <div class="row"><img class="algRC" src="media/img/contacto/logo.png"></div>
                </div>
				<div class="col s12 m6 l6">
                    <form>
                        <div class="row">
                            <input type="text" class="txtForm" placeholder="NOMBRE COMPLETO" />
                        </div>
                        <div class="row">
                            <input type="text" class="txtForm" placeholder="CORREO ELECTRÓNICO" />
                        </div>
                        <div class="row">
                            <input type="text" class="txtForm" placeholder="COMPAÑIA" />
                        </div>
                        
                        <div class="row">
                            <input type="text" class="txtForm" placeholder="ASUNTO --- ELIGE UNA OPCIÓN" list="asuntos" />
                            <datalist id="asuntos">
                                <option value="PROYECTO">
                                <option value="DISEÑO">
                                <option value="CONSULTA">
                                <option value="ENTREVISTA">
                            </datalist> 
                        </div>
                        
                        <div class="row">
                            <textarea class="txtForm" rows="8" placeholder="COMENTARIOS"></textarea>
                        </div>
                        
                        <div class="row">
                            <a href="#" onclick="return false;" class="button success btnRight">ENVIAR</a>
                        </div>
                    </form>
                </div>
			</div>	
		</div>
	</div>
    <!-- Formulario -->


@stop
@section('addJs')
<script src="js/contacto.js"></script>
@stop