<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Verifica tu correo</h2>

		<div>
			Gracias por crear una cuenta con nosotros.<br/>
			Por favor sigue el siguiente link para verificar tu correo <br/>
			<br/>
			{{ URL::to('user/auth/' . $code) }}<br/>

		</div>

	</body>
</html>