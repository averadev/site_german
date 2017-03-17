@extends('templates.main')
@section('content')

    <!-- Slider -->
    <div id="index-banner" class="parallax-container fontContact">
		<div class="section no-pad-bot">
			<div class="container">
				<br><br>
			<!--	<h1 class="header center teal-text text-lighten-2">Parallax Template</h1> -->
				<div class="row center">
					<p style="margin-top: 10%;" class="header col s12 light ContactT"><span style="font-size: 4.5rem;">C</span>ONTACTO</p>
                    <p class="ContactSubT">Escríbeme si deseas más información</p>
				</div>
				<div class="row center">
					
				</div>
				<br><br>
			</div>
		</div>
		<div class="parallax"><img src="media/img/contacto/contacto_slider.jpg"></div>
	</div>
	<!-- Slider -->

	<!-- Formulario -->
	<div class="bg_contact" >
		<div class="section" >
			<div class="container row fontContact">
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
                    <form id="FormContactUS" action="http://hostyourgeek.com/beta/germanArzate/contacto/contacto-mail" method="post">
                        <div class="row">
                            <input type="text" id="name" class="txtForm" name="name" required placeholder="NOMBRE COMPLETO" />
                        </div>
                        <div class="row">
                            <input type="text" id="email" class="txtForm" name="email" required placeholder="CORREO ELECTRÓNICO" />
                        </div>
                        <div class="row">
                            <input type="text" id="company" class="txtForm" name="company" required placeholder="COMPAÑIA" />
                        </div>
                        
                        <div class="row">
                            <input type="text" class="txtForm" name="asuntos" required placeholder="ASUNTO --- ELIGE UNA OPCIÓN" list="asuntos" />
                            <datalist id="asuntos">
                                <option value="PROYECTO">
                                <option value="DISEÑO">
                                <option value="CONSULTA">
                                <option value="ENTREVISTA">
                            </datalist> 
                        </div>
                        
                        <div class="row">
                            <textarea id="comment" class="txtForm" name="comment" rows="8" required placeholder="COMENTARIOS"></textarea>
                        </div>
                        
                        <div class="row">
                            <button id="sendBtnContact" class="button green btnRight" type="submit">ENVIAR</button>
                            <!-- <a href="#"  id="sendBtnContact" class="button success btnRight">ENVIAR</a> -->
                        </div>
                    </form>
                </div>
			</div>	
		</div>
	</div>
    <!-- Start Modal Proximamente Form -->
    <div id="msgModal" class="modal border-radius-10">
        <div class="notification">
            <h4 style="text-align: center;" id="titleModalMsg"></h4>
            <p style="font-size: 1.4rem; line-height: 1.8rem; text-align: center;" id="showmsgModal"></p>
        </div>
        <div class="modal-footer" style="text-align: center; padding-bottom: 4.5em;">
            <button style="float: inherit;" class="modal-action modal-close waves-effect grey center lighten-5 grey-border btn"><i class="material-icons right">navigate_next</i>ACEPTAR</button>
        </div>
    </div>
    <!-- End Modal Proximamente Form -->
    <!-- Formulario -->


@stop
@section('addJs')
<script src="js/contacto.js"></script>
<script src="js/script.js"></script>
<script src="js/script_contactform.js"></script>
<script src="js/jquery_validate.js"></script>
@stop