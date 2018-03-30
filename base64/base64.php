<?php

	function isNullMensaje($mensaje){

		if(strlen(trim($mensaje)) < 1){

			return true;

		}else{

			return false;
		}
	}

	function isNullCifrado($cifrado){

		if(strlen(trim($cifrado)) < 1){

			return true;

		}else{

			return false;
		}
	}

	function encriptar($cadena){

		$key = 'hola';

		$encrypted = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $cadena, MCRYPT_MODE_CBC, md5(md5($key))));

		return $encrypted;
	}

	function desencriptar($cadena){

		$key = 'hola';

		$decrypted = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode($cadena), MCRYPT_MODE_CBC, md5(md5($key))), "\0");

		return $decrypted;
	}

	$mensaje = $_POST['mensaje'];
	$cifrado = $_POST['cifrado'];
?>

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

<a href="test.html"><-volver</a>
<br>

<?php if(isNullMensaje($mensaje)){ echo ' '; }else{ ?>

	<h1>Mensaje Cifrado</h1>

	<br>

<?php echo encriptar($mensaje); } ?>

<?php if(isNullCifrado($cifrado)){ echo ' '; }else{ ?>

	<h1>Mensaje Descifrado</h1>

	<br>

<?php echo desencriptar($cifrado); } ?>