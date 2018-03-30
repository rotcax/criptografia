<?php
	
	if(!empty($_POST)){

		$texto = $_POST['texto'];
		$coste = $_POST['coste'];

		if($coste == 1 || $coste == 2 || $coste == 3){

			$alert = 'Coste incorrecto, debe ser mayor de 3';

		}else{

			$opciones = ['cost'=>$coste,];

			$cifrado = password_hash($texto, PASSWORD_BCRYPT, $opciones);
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
</style>

<a href="test.html"><-volver</a>
<br>

<form method = "POST" action = "<?php $_SERVER['PHP_SELF'] ?>" autocomplete = "off">
	<div class='main'>
	Ingrese el mensaje a cifrar: <input type="text" name="texto" required>
	<br>
	<br>
	Ingrese el coste deseado: <input type="text" name="coste" required>
	<br>
	<br>
	<input type="submit" value="Encriptar">
	<br>
	<br>
	<?php if(isset($cifrado)) echo $cifrado; ?>
	<?php if(isset($alert)) echo $alert; ?>
</div>
</form>