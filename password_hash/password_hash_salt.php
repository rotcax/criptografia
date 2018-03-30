<?php
	
	if(!empty($_POST)){

		$mensaje = $_POST['mensaje'];
		$coste = $_POST['coste'];
		$sal = $_POST['sal'];

		if($coste == 1 || $coste == 2 || $coste == 3){

			$alert = 'Coste incorrecto, debe ser mayor de 3';

		}else if($sal < 21){

			$alertC = 'Salt incorrecta, debe ser mayor de 21';

		}else{

			$opciones = ['cost' => $coste, 'salt' => mcrypt_create_iv($sal, MCRYPT_DEV_URANDOM),];

			$cifrado = password_hash($mensaje, PASSWORD_BCRYPT, $opciones);
		}
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
	h1{
		text-align: center;
	}
</style>

<a href="test.html"><-volver</a>
<br>

<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" autocomplete="off">
	<div class="main">
		Ingrese el Mensaje a Cifrar: <input type="text" name="mensaje">
		<br>
		<br>
		Ingrese el Coste deseado: <input type="text" name="coste">
		<br>
		<br>
		Ingrese la Salt deseada: <input type="text" name="sal">
		<br>
		<br>
		<input type="submit" value="Encriptar">
		<br>
		<br>
		<?php if(isset($cifrado)) echo $cifrado ?>
		<?php if(isset($alert)) echo $alert ?>
		<?php if(isset($alertC)) echo $alertC ?>
	</div>
</form>