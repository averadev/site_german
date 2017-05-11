
<!DOCTYPE html>
<html lang="es">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
  <title>Login | German Arzate</title>

  <!-- Favicons-->
  <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<style type="text/css">
		.material-icons {
			line-height: 2;
		}
		.input-field {
			margin-top: 0em;
		}
		input:not([type]), input[type="text"], input[type="password"], input[type="email"], input[type="url"], input[type="time"], input[type="date"], input[type="datetime"], input[type="datetime-local"], input[type="tel"], input[type="number"], input[type="search"], textarea.materialize-textarea {
			margin: 15px 0 0 0;
			height: 2rem;
		}
	</style>
</head>

<body class="grey lighten-1">
	
  <div id="login-page" style="margin-top:4vw;" class="row">
	<div class="col s12 m6 l4 offset-m3 offset-l4 grey lighten-1">
		<div class="col s12 m12 l10 offset-l1 card-panel">

			<form class="login-form" role="form" method="POST" action="{{Request::root()}}/admin/login">

			<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="row">
				  <div class="input-field col s12 center">
					<img src="../media/img/home/logo.png" style="margin-top: 1em; width: 180px;" alt="" class="responsive-img valign profile-image-login">
				<!--    <p class="center login-form-text">German Arzate Admin</p> -->
					@if ($errors->any())
						{{ implode('', $errors->all('<div>:message</div>')) }}
					@endif
					@if(Session::has('error_message'))
						<div>{{ Session::get('error_message') }}</div>
					@endif
				  </div
				</div>
				<div class="row">
				  <div class="input-field col s12">
					<i class="material-icons prefix">email</i>
					<input id="username" name="email" type="text">
					<label for="username" class="center-align">E-mail</label>
				  </div>
				</div>
				<div class="row">
				  <div class="input-field col s12">
					<i class="material-icons prefix">lock_outline</i>
					<input id="password" name="password" type="password">
					<label for="password" class="center-align">Contraseña</label>
				  </div>
				</div>
				<div class="row">          
				  <div class="input-field col s12 m12 l12  login-text">
					  <input type="checkbox" id="remember-me" />
					  <label for="remember-me">Recuerdame</label>
				  </div>
				</div>
				<div class="row">
				  <div class="input-field col s12">
					<button type="submit" class="btn waves-effect waves-light col s12">Login</button>
				  </div>
				</div>
			</form>
		</div>
	</div>
  </div>

  <!-- ================================================
	Scripts
	================================================ -->

  <!-- jQuery Library -->
 <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <!--materialize js-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>

</body>

</html>