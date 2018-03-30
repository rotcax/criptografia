<style type="text/css">
	*{margin:4px}
	body{
		margin:50px 5%;
		background:#DDD;
		font-family: arial;
	}
	.main{
		display: table;
		margin: auto;
	}
	input{
		width:auto;
	}
</style>

<form method="POST" action="dev.php" autocomplete="off">
	<div class="main">
		<strong><em>Instrucciones:<br><br> El mismo texto que usted cifre, es el mismo que será descifrado. Esto se debe a que está cifrando con la llave publica generada por un certificado SSL y la única manera de descifrar el mensaje es con la llave privada del certificado.<br><br> Para fines de este ejemplo cifraremos todos los mensajes y descifraremos en la misma pantalla.</em></strong>
		<br>
		<br>
		<br>
		Ingrese el mensaje a cifrar: <input type="text" name="texto">
									<input type="submit" value="Cifrar">
		<br>
		<br>
		Ingrese el mensaje a descifrar: <input type="text" name="mensaje">
										<input type="submit" value="Descifrar">
		<br>
		<br>
		
	</div>
</form>

