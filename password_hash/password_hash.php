<?php

	if(!empty($_POST)){

		$texto = $_POST['texto'];

		$secret = password_hash($texto, PASSWORD_DEFAULT);
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
	Ingrese el mensaje a cifrar: <input type="text" name="texto">
	<br>
	<input type="submit" value="Encriptar">
	<br>
	<br>
	<?php if(isset($secret)){ echo $secret; } ?>
</div>
</form>