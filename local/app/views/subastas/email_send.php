<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title>German Arzate</title>
    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,600i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/text-parser.css') }}">  
    <link rel="stylesheet" href="{{ URL::asset('css/materialize.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/tabModule.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/foundation.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style-timeline.css') }}">
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="{{ URL::asset('js/siema.js') }}"></script>
    
</head>
<body>
    <nav class="mymenu">
        <div class="nav-wrapper gray-color">
            <div class="container">
                <div class="hide-on-med-and-down">
                    <img class="brand-logo" style="margin-top: 11px; width: 160px;" src="{{ URL::asset('media/img/home/logo.png') }}" alt="logo">
                </div>
                <div class="hide-on-large-only">
                    <img class="brand-logo" style="margin-top: 10px; margin-left: 35px; width: 165px;" src="{{ URL::asset('media/img/home/logo.png') }}" alt="logo">
                </div>  
            </div>
        </div>
    </nav>

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col s12 l12">
                    <h3 class="light center" style="text-transform: uppercase;">¡Gracias por contactarme!</h3>
                    <div class="row">
                        <div class="col s12 l12 center">
                            <h4 class="center">Hola: <span><strong>{{$message}}!!</strong></span></h4>
                            <span class="center">Tan pronto como tengamos nosotros la información con gusto te la haremos llegar a tu correo electronico</span>
                            <p>mientras tanto te invito a que visites mi <a href="#">pagina web</a> y te enteres de mis proximas subastas.</p>
                            <h5 class="light"><strong>Tús Datos de Contacto:</strong></h5>
                            <span><strong>Nombre:</strong></span>: <span>Nombre Persona</span> <br>
                            <span><strong>Correo:</strong></span>: <span>Correo Electronico</span> <br>
                            <span><strong>Ciudad:</strong></span>: <span>Nombre Ciudad</span> <br>
                            <span><strong>Comentario:</strong></span> <br>
                            <span>Comentarios</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- F O O T E R -->
    <footer class="page-footer darker">
        <div class="container" style="margin-top: 40px;">
            <div class="row">
                <div class="col l4 s12">
                    <ul class="footer-info" >
                        <li><a class="white-text" href="#!">INICIO</a></li>
                        <li><a class="white-text" href="#!">ESCULTURAS</a></li>
                        <li><a class="white-text" href="#!">NOTAS DE PRENSA</a></li>
                        <li><a class="white-text" href="#!">GERMAN ARZATE</a></li>
                        <li><a class="white-text" href="#!">CONTACTO</a></li>
                        <li class="white-text" style="margin-top: 1em;" >SÍGUEME EN: <img class="social-button" alt="facebook" id="goface" src="{{ URL::asset('media/img/home/fb.png') }}"> <img class="social-button" alt="instagram" id="goinsta" src="{{ URL::asset('media/img/home/insta.png') }}"> <img class="social-button" alt="twitter" id="gotwitter" src="{{ URL::asset('media/img/home/twitter.png') }}"> </li>         
                    </ul>
                </div>
                <div class="col l4 s12">
                    <div class="row">
                        <div class="col s12">
                            <p style="margin-bottom: 1em; font-size: 14px; letter-spacing: 1px; " class="white-text"> ¡INSCRÍBITE A MI NEWSLETTER! </p>
                        </div>
                        <form class="myform col s11 l9 center" data-abide id="mailform">
                        
                            <div data-abide-error class="alert callout" style="display: none;">
                                <p><i class="fi-alert"></i> Porfavor completa todos los campos.</p>
                            </div>
                            <div class="success callout" style="display: none;">
                                <p><i class="fi-success"></i> Mensaje enviado.</p>
                            </div>                      
                            <input class="my-input" id="myname" required type="text" placeholder="Nombre Completo">
                            <input class="my-input" id="myemail" pattern="valemail" required type="text" placeholder="Correo electronico">
                            <button class="waves-effect white-border grey darken-3 waves-light btn">INSCRIBIRME</button>
                        </form> 

                    </div>
                </div>
                <div class="col l4 s12">
                    <ul class="footer-info">
                        <img style="width: 7em; margin-bottom: 20px;" src="{{ URL::asset('media/img/home/logoblanco.png') }}" alt="logo footer">
                        <li class="white-text" href="#!" >Calle Niebla No.5 S.M.18,</a></li>
                        <li class="white-text" href="#!" >77580 Cancún, Q. Roo, México</a></li>
                        <li class="white-text" href="#!" >Tel.: 011 521 998 106850</a></li>
                        <li class="white-text" href="#!" >E-mail: art@germanarzate.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container center">
                Todos los derechos reservados German Arzate © 2017
            </div>
        </div>
    </footer>   
    <!--  Scripts-->

    <script src="{{ URL::asset('js/materialize.js') }} "></script>
    <script src="{{ URL::asset('js/main.js') }} "></script>
@yield('content')
<script type="text/javascript">
        var HOST = "{{URL::to('/')}}";
        $.ajaxSetup({
            headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
        });
</script>
@yield('addJs')
</body>
</html>