<!--crypt es una funcion que proporciona Hash de cadenas de un solo sentido. crypt() devolvera el hash de un string utilizando el algoritmo estandar basado en DES de Unix o algoritmos alternativos que puedan estar disponibles en el sistema-->

<!--Nota Importante: El tipo de hash se dispara mediante el argumento salt que se le proporcione-->

<!--La función crypt() estándar basada en DES devuelve la sal como los primeros dos caracteres de la salida. También utiliza solamente los primeros ocho caracteres de str, por lo que cadenas más largas que empiecen con los mismos ocho caracteres, generarán el mismo resultado (cuando se utiliza la misma sal).-->

<?php 

	if(CRYPT_STD_DES == 1){

		echo '<strong>Standard DES:</strong>' . crypt('CRIPTOGRAFIA', 'rl') . "<br><br>";
	}

	if(CRYPT_EXT_DES == 1){

		echo '<strong>Extended DES: </strong>' . crypt('CRIPTOGRAFIA', '_J9..rasm') . "<br><br>";
	}

	if(CRYPT_MD5 == 1){

		echo '<strong>MD5:     </strong>     ' . crypt('CRIPTOGRAFIA', '$1$rasmusle$') . "<br><br>";
	}

	if(CRYPT_BLOWFISH == 1){

		echo '<strong>Blowfish:   </strong>  ' . crypt('CRIPTOGRAFIA', '$2a$07$usesomesillystringforsalt$') . "<br><br>";
	}

	if(CRYPT_SHA256 == 1){

		echo '<strong>SHA-256:   </strong>   ' . crypt('CRIPTOGRAFIA', '$5$rounds=5000$usesomesillystringforsalt$') . "<br><br>";
	}

	if(CRYPT_SHA512 == 1){

		echo '<strong>SHA-512:  </strong>    ' . crypt('CRIPTOGRAFIA', '$6$rounds=5000$usesomesillystringforsalt$') . "<br><br>";
	}

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