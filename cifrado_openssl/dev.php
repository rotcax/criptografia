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

<?php

	$texto = $_POST['texto'];
	$mensaje = $_POST['mensaje'];

	function isNullTexto($texto){

		if(strlen(trim($texto)) < 1){

			return true;

		}else{

			return false;
		}
	}

	function isNullMensaje($mensaje){

		if(strlen(trim($mensaje)) < 1){

			return true;

		}else{

			return false;
		}
	}

	function cifrar($cadena){


		$texto_plano = $cadena;

		$llave_publica = "file://c:/xampp/htdocs/criptografia/cifrado_openssl/certificado.pem";

		openssl_public_encrypt($texto_plano, $texto_encriptado, $llave_publica);

		//Vuelvo a cifrar el mensaje para mayor seguridad

		$texto_encriptado = base64_encode($texto_encriptado);

		return $texto_encriptado;
	}
		

	function descifrar($cadena){

		$fp = fopen("c:/xampp/htdocs/criptografia/cifrado_openssl/privkey.pem", "r");

		$llave_privada = fread($fp, 8192);

		fclose($fp);

		$res = openssl_get_privatekey($llave_privada, "clave1");

		$mensaje_encriptado = $cadena;

		$mensaje_encriptado = base64_decode($mensaje_encriptado);

		openssl_private_decrypt($mensaje_encriptado, $texto_desencriptado, $res);

		return $texto_desencriptado;
	}
?>

<a href="prod.php"><-volver</a>
<br>

<?php if(isNullTexto($texto)){ echo ' '; }else{ ?>

	<h1>Mensaje Cifrado</h1>

	<br>

<?php echo cifrar($texto); } ?>

<?php if(isNullMensaje($mensaje)){ echo ' '; }else{ ?>

	<h1>Mensaje Descifrado</h1>

	<br>

<?php echo descifrar($mensaje); } ?>